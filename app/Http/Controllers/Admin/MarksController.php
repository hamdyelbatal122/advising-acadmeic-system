<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advising;
use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    public function index($level = null)
    {
        if ($level) {

        $advisings = Advising::with('student')->where('level', $level)->whereHas('marks')->get();

        } else {
            $advisings = array();
        }
        return view('dashboard.admin.marks.index', compact('advisings'));
    }

    public function create()
    {
        $students = Student::all();
        
        return view('dashboard.admin.marks.create', compact('students'));
    }

    public function getDataByStudent(Request $request)
    {
        $student = Student::find($request->student_id);
        $advising = $student->activeAdvising;
        if (!$advising) {
            return response()->json(['status' => false, 'message' => 'No active advising found for this student']);
        }
        $courses = $advising->courses->load('course');   
        return response()->json(['status' => true, 'courses' => $courses , 'advising' => $advising]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'advising_id' => 'required',
            'student_id' => 'required',
            'course' => 'required',
            'grade' => 'required',
        ]);
        $student = Student::findOrFail($request->student_id);
        $advising = Advising::where('status','active')->findOrFail($request->advising_id);
        $admin_id = auth()->user()->id;

        foreach ($request->course as $key ) {
            $mark = new Mark();
            $mark->advising_id = $advising->id;
            $mark->admin_id = auth()->user()->id;
            $mark->course_id = $request->course[$key];
            $mark->grade = $request->grade[$key];
            $mark->save();
        }

        $advising->status = 'completed';
        $advising->save();

        return response()->json(['status' => true, 'message' => 'Marks added successfully']);
        
    }

    public function edit($id)
    {
        $advising = Advising::whereHas('marks')->findOrFail($id);
        $student = Student::findOrFail($advising->student_id);
        $courses = $advising->marks->load('course');
        return view('dashboard.admin.marks.edit', compact('advising', 'student', 'courses'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'advising_id' => 'required',
            'student_id' => 'required',
            'course' => 'required',
            'grade' => 'required',
        ]);
        $student = Student::findOrFail($request->student_id);
        $advising = Advising::findOrFail($request->advising_id);
        $admin_id = auth()->user()->id;

        foreach ($request->course as $key ) {
            $mark = Mark::where('advising_id', $advising->id)->where('course_id', $request->course[$key])->first();
            $mark->grade = $request->grade[$key];
            $mark->admin_id = auth()->user()->id;
            $mark->save();
        }

        return response()->json(['status' => true, 'message' => 'Marks updated successfully']);
        
    }

    public function view($id)
    {
        $advising = Advising::whereHas('marks')->findOrFail($id);
        $courses = $advising->marks->load('course');     
        $student = Student::findOrFail($advising->student_id);   
        return view('dashboard.admin.marks.view', compact('student', 'courses', 'advising'));
    }
}