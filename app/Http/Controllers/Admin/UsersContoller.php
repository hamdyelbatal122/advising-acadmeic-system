<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersContoller extends Controller
{
    public function index()
    {
        $users = Admin::where('id', '!=', auth('admin')->id())->get();
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('dashboard.admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'profession' => 'required',
            'role_name' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::create($request->all());
        $admin->assignRole($request->role_name);

        return response()->json(['status'=>true,'message' => 'User created successfully']);
    }

    public function edit($id)
    {
        $user = Admin::findOrFail($id);
        $roles = Role::all();
        return view('dashboard.admin.users.edit', compact('user','roles'));
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$request->id,
            'profession' => 'required',
            'role_name' => 'required',
            'password' => 'nullable',
        ]);

        $admin = Admin::findOrFail($request->id);
        
        if($request->password == null){
            $request->request->remove('password');
        }else{
            $request->password = Hash::make($request->password);
        
        }
        $admin->syncRoles($request->role_name);
        $admin->update($request->all());

        return response()->json(['status'=>true,'message' => 'User updated successfully']);
    }

    public function delete(Request $request)
    {
        $user = Admin::find($request->id);
        $user->delete();
        return response()->json(['status'=>true,'message' => 'User deleted successfully','message2' => 'All data related to this user has been deleted successfully']);
    }




}
