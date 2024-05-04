<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersContoller extends Controller
{
    public function index()
    {
        $users = Admin::where('id', '!=', auth()->id())->get();
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'profession' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        Admin::create($request->all());

        return response()->json(['status'=>true,'message' => 'User created successfully']);
    }

    public function edit($id)
    {
        $user = Admin::find($id);
        return view('dashboard.admin.users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$request->id,
            'profession' => 'required',
            'role' => 'required',
            'password' => 'nullable',
        ]);
        $user = Admin::find($request->id);

        if($request->password == null){
            $request->request->remove('password');
        }else{
            $request->password = Hash::make($request->password);
        
        }

        $user->update($request->all());

        return response()->json(['status'=>true,'message' => 'User updated successfully']);
    }

    public function delete(Request $request)
    {
        $user = Admin::find($request->id);
        $user->delete();
        return response()->json(['status'=>true,'message' => 'User deleted successfully','message2' => 'All data related to this user has been deleted successfully']);
    }




}
