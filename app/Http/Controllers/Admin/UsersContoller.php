<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ImageTrait;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersContoller extends Controller
{
    use ImageTrait;
    public function __construct()
    {
        $this->middleware('permission:View Admins', ['only' => ['index']]);
        $this->middleware('permission:Add Admin', ['only' => ['create','store']]);
        $this->middleware('permission:Edit Admin', ['only' => ['edit','update']]);
        $this->middleware('permission:Delete Admin', ['only' => ['delete']]);
    }

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
     $data =  $request->validate([
            'name' => 'required',
            'full_name' => 'required',
            'email' => 'required|email|unique:admins',
            'profession' => 'required',
            'role_name' => 'required',
            'password' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $image = $this->saveImage($request->image,'/uploads/admins/');
            $data['image'] = $image;
        }

        $admin = Admin::create($data);
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
        
      $data = $request->validate([
            'name' => 'required',
            'full_name' => 'required',
            'email' => 'required|email|unique:admins,email,'.$request->id,
            'profession' => 'required',
            'role_name' => 'required',
            'password' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('image')){
            $image = $this->saveImage($request->image,'/uploads/admins/');
            $data['image'] = $image;
        }

        $admin = Admin::findOrFail($request->id);
        
        if($request->password){
            $data['password'] = Hash::make($request->password);
        }else{
            unset($data['password']);
        }

        $admin->syncRoles($request->role_name);
        $admin->update($data);

        return response()->json(['status'=>true,'message' => 'User updated successfully']);
    }

    public function delete(Request $request)
    {
        $user = Admin::find($request->id);
        $user->delete();
        return response()->json(['status'=>true,'message' => 'User deleted successfully','message2' => 'All data related to this user has been deleted successfully']);
    }




}
