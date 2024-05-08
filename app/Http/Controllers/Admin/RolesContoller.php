<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesContoller extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('dashboard.admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('dashboard.admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::create(['name' => $request->name]);
        $role->givePermissionTo($request->permission);

        return response()->json(['status'=> true,'message' => 'Role created successfully']);
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        // $role->syncPermissions($permissions);
        return view('dashboard.admin.roles.edit', compact('role','permissions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::findOrFail($request->id);
        $role->update(['name' => $request->name]);
        
        $role->syncPermissions($request->permission);

        return response()->json(['status'=> true,'message' => 'Role updated successfully']);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);

        $role = Role::findOrFail($request->id);
        $role->delete();

        return response()->json(['status'=> true,'message' => 'Role deleted successfully']);
    }
}
