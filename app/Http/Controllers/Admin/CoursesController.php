<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:View Courses', ['only' => ['index']]);
        $this->middleware('permission:Add Course', ['only' => ['create','store']]);
        $this->middleware('permission:Edit Course', ['only' => ['edit','update']]);
        $this->middleware('permission:Delete Course', ['only' => ['delete']]);
    }

    public function index()
    {
        $courses = Course::all();
        return view('dashboard.admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $admins = Admin::where('role', 'professor')->get();
        return view('dashboard.admin.courses.create', compact('admins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hours' => 'required|numeric',
            'professor_id' => 'required|exists:admins,id',
            'day_of_lecture' => 'required',
            'time_of_lecture' => 'required',
            'duration_of_lecture' => 'required', 
            'lab' => 'required',
            'day_of_lab' => 'nullable',
            'time_of_lab' => 'nullable',
            'duration_of_lab' => 'nullable',
        ]);

        Course::create($request->all());
        return response(['status' => true,'message' => 'Course created successfully']);
    }

    public function edit($id)
    {
        $course = Course::find($id);
        $admins = Admin::where('role', 'professor')->get();
        return view('dashboard.admin.courses.edit', compact('course', 'admins'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required',
            'hours' => 'required|numeric',
            'professor_id' => 'required|exists:admins,id',
            'day_of_lecture' => 'required',
            'time_of_lecture' => 'required',
            'duration_of_lecture' => 'required', 
            'lab' => 'required',
            'day_of_lab' => 'nullable',
            'time_of_lab' => 'nullable',
            'duration_of_lab' => 'nullable',
            'exam_date' => 'required|date',
        ]);

        Course::find($request->id)->update($request->all());
        return response(['status' => true,'message' => 'Course updated successfully']);
    }

    public function delete(Request $request)
    {
        Course::find($request->id)->delete();
        return response(['status' => true,'message' => 'Course deleted successfully']);
    }
}
