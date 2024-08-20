<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if($search) {
            $sliders = Slider::search($search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $sliders = Slider::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.pages.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.pages.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        // Periksa apakah ada gambar yang diupload
        if ($request->hasFile('images')) {
            // Mengambil file gambar dari form
            $images = $request->file('images');

            // Buat nama unik untuk gambar berdasarkan waktu
            $imageName = time() . '.' . $images->getClientOriginalExtension();

            // Simpan gambar di direktori 'storage/app/public/slider'
            $path = $request->file('images')->storeAs('public/slider', $imageName);

            // Simpan path gambar dengan format yang dapat diakses melalui URL
            $publicPath = Storage::url($path);
        }

        // Membuat data slider baru
        Slider::create([
            'images' => $publicPath,
            'heading' => $request->heading,
            'subheading' => $request->sub_heading,
        ]);

        // Redirect atau response sesuai kebutuhan
        return redirect()->route('slider.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('administrator.pages.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        // Periksa apakah ada file baru yang diunggah
    if ($request->hasFile('images')) {
        // Hapus gambar lama jika ada
        if ($slider->images) {
            Storage::delete('public/slider/' . basename($slider->images));
        }

        // Simpan gambar baru
        $image = $request->file('images');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/slider', $imageName);
        $slider->images = Storage::url($path);
    }

    // Update data lainnya
    $slider->update([
        'heading' => $request->input('heading'),
        'subheading' => $request->input('sub_heading'),
    ]);

    // Redirect dengan pesan sukses
    return redirect()->route('slider.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        // Hapus gambar dari storage
        if ($slider->images) {
            Storage::delete('public/slider/' . basename($slider->images));
        }

        // Hapus data slider
        $slider->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('slider.index')->with('success', 'Data berhasil dihapus');
    }
}
