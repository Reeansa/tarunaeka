<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\ClientType;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Search data client
        $search = $request->search;

        if($search) {
            $clients = Client::with('clientType')->search($search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $clients = Client::with('clientType')->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.pages.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = ClientType::all();
        return view('administrator.pages.client.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request)
    {
        // Jika ada type baru yang diinputkan
        if ($request->filled('new_type')) {
            // Buat type baru dan simpan ke database
            $type = ClientType::create([
                'name' => $request->new_type,
            ]);

            // Gunakan ID type baru
            $type_id = $type->id;
        } else {
            // Gunakan type yang dipilih dari dropdown
            $type_id = $request->type;
        }

        // Simpan data lainnya ke database menggunakan ID kategori
        Client::create([
            'client_type_id' => $type_id,
            'name' => $request->client,
            'description' => $request->description,

        ]);

        return redirect()->route('client.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $types = ClientType::all();
        return view('administrator.pages.client.edit', compact('client', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        // Jika ada type baru yang diinputkan
        if ($request->filled('new_type')) {
            // Buat type baru dan simpan ke database
            $type = ClientType::create([
                'name' => $request->new_type,
            ]);

            // Gunakan ID type baru
            $type_id = $type->id;
        } else {
            // Gunakan type yang dipilih dari dropdown
            $type_id = $request->type;
        }

        // Simpan data lainnya ke database menggunakan ID client
        $client->update([
            'client_type_id' => $type_id,
            'name' => $request->client,
            'description' => $request->description,
        ]);

        return redirect()->route('client.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('success', 'Data berhasil dihapus');
    }
}
