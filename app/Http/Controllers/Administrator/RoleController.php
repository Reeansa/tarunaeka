<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;

        if ($search) {
            $roles = Role::search($search)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $roles = Role::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.pages.role.index', compact('roles'));
    }

    public function create() {
        return view('administrator.pages.role.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        Role::create(
            [
                'name' => $request->role,
                'description' => $request->description,
            ]
        );
        return redirect()->route('role.index')->with('success', 'Role created successfully');
    }

    public function edit(Role $role)
    {
        return view('administrator.pages.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update(
            [
                'name' => $request->role,
                'description' => $request->description,
            ]
        );
        return redirect()->route('user.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('role.index')->with('success', 'Role deleted successfully');
    }
}
