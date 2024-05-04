<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $student = auth()->user()->id;
        $student = Student::with('activeAdvising')->findOrFail($student);
        return view('dashboard.student.profile.index', compact('student'));
    }

    public function password()
    {
        return view('dashboard.student.profile.password');
    }

    public function Uupdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $student = auth()->user();
        if (!Hash::check($request->old_password, $student->password)) {
            return response()->json(['status'=>false,'message' => 'Old password is incorrect']);
        }

        if (Hash::check($request->password, $student->password)) {
            return response()->json(['status'=>false,'message' => 'New password can not be the same as old password']);
        }

        $student->password = Hash::make($request->password);
        $student->currant_password = $request->password;
        $student->save();

       return response()->json(['status'=>true,'message' => 'Password updated successfully']);
    }
}
