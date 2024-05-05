<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentsContoller extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('dashboard.admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.admin.students.create');
    }

    public function store(Request $request)
    {
  
    $data =  $request->validate([

            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students',
            'password' => 'required|min:8',
            'nationality' => 'required',
            'national_id' => 'required|unique:students|digits:14',
            'gender' => 'required',
            'birth' => 'required',
            'blood' => 'required',
            'religion' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'college' => 'required',
            'level' => 'required',
            'gpa' => 'required',

        ]);

        $data['password'] = Hash::make($request->password);
        $data['currant_password'] = $request->password;
        Student::create($data);

        return response()->json(['status'=>true,'message' => 'Student created successfully']);  

    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('dashboard.admin.students.edit', compact('student'));
    }

    public function update(Request $request)
    {
        $data =  $request->validate([

            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:students,email,'.$request->id,
            'nationality' => 'required',
            'national_id' => 'required|digits:14|unique:students,national_id,'.$request->id,
            'gender' => 'required',
            'birth' => 'required',
            'blood' => 'required',
            'religion' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'college' => 'required',
            'level' => 'required',
            'gpa' => 'required',
            'password' => 'nullable|min:8',
            'currant_password' => 'nullable',
        ]);

        $student = Student::find($request->id);

        if($request->password !== $student->currant_password){
            
        $data['password'] = Hash::make($request->password);
        $data['currant_password'] = $request->password;

        }

        $student->update($data);

        return response()->json(['status'=>true,'message' => 'Student updated successfully']);


    }


    public function delete(Request $request)
    {
        $student = Student::find($request->id);
        $student->delete();
        return response()->json(['status'=>true,'message' => 'Student deleted successfully','message2' => 'All data related to this student has been deleted successfully']);
    }



}
