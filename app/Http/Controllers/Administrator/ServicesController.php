<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $services = Services::search($search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $services = Services::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.pages.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServicesRequest $request)
    {
        // Periksa apakah ada gambar yang diupload
        if ($request->hasFile('images')) {
            // Mengambil file gambar dari form
            $images = $request->file('images');

            // Buat nama unik untuk gambar berdasarkan waktu
            $imageName = time() . '.' . $images->getClientOriginalExtension();

            // Simpan gambar di direktori 'storage/app/public/slider'
            $path = $request->file('images')->storeAs('public/services', $imageName);

            // Simpan path gambar dengan format yang dapat diakses melalui URL
            $publicPath = Storage::url($path);
        }

        Services::create(
            [
                'name' => $request->name,
                'images' => $publicPath,
                'capacity' => $request->capacity,
                'pressure' => $request->pressure,
                'fuel' => $request->fuel,
                'description' => $request->description,
            ]
        );
        return redirect()->route('services.index')->with('success', 'Service created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Services $services)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServicesRequest $request, Services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Services $services)
    {
        //
    }
}
