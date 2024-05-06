<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = auth('admin')->user();
        $admin = Admin::find($admin->id);
        return view('dashboard.admin.profile.index', compact('admin'));
    }

    public function password()
    {
        return view('dashboard.admin.profile.password');
    }

    public function Uupdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $admin = auth('admin')->user();
        $admin = Admin::find($admin->id);
        if (!Hash::check($request->old_password, $admin->password)) {
            return response()->json(['status'=>false,'message' => 'Old password is incorrect']);
        }

        if (Hash::check($request->password, $admin->password)) {
            return response()->json(['status'=>false,'message' => 'New password can not be the same as old password']);
        }

        $admin->password = Hash::make($request->password);
        $admin->save();

       return response()->json(['status'=>true,'message' => 'Password updated successfully']);
    }


}
