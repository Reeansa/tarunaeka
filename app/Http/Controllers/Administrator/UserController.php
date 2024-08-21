<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

        if ($search) {
            $users = User::search($search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $users = User::with('role')->orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('administrator.pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        // Periksa apakah ada gambar yang diupload
        if ($request->hasFile('images')) {
            // Mengambil file gambar dari form
            $images = $request->file('images');

            // Buat nama unik untuk gambar berdasarkan waktu
            $imageName = time() . '.' . $images->getClientOriginalExtension();

            // Simpan gambar di direktori 'storage/app/public/slider'
            $path = $request->file('images')->storeAs('public/user', $imageName);

            // Simpan path gambar dengan format yang dapat diakses melalui URL
            $publicPath = Storage::url($path);
        }

        User::create(
            [
                'images' => $publicPath,
                'role_id' => $request->role,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
            ]
        );
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('administrator.pages.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        // Periksa apakah ada gambar yang diupload
        if ($request->hasFile('images')) {
            // Mengambil file gambar dari form
            $images = $request->file('images');

            // Buat nama unik untuk gambar berdasarkan waktu
            $imageName = time() . '.' . $images->getClientOriginalExtension();

            // Simpan gambar di direktori 'storage/app/public/slider'
            $path = $request->file('images')->storeAs('public/user', $imageName);

            // Simpan path gambar dengan format yang dapat diakses melalui URL
            $publicPath = Storage::url($path);

            // Hapus gambar lama
            Storage::delete('public/user/' . basename($user->images));

            // Update data dengan gambar baru
            $user->update(
                ['images' => $publicPath]
            );
        }

        if ($request->filled('password')) {

            $data['password'] = $request->password;
            $user->update($data);
        }

        $user->update(
            [
                'role_id' => $request->role,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]
        );

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Hapus gambar
        Storage::delete('public/user/' . basename($user->images));

        // Hapus data
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
}
