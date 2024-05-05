<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advising;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class AdvisingController extends Controller
{
    public function index($level = null)
    {
        if ($level) {
            $advisings = Advising::active()->where('level', $level)->get();
        } else {
            $advisings = array();
        }
        return view('dashboard.admin.advising.index', compact('advisings'));
    }

    public function create()
    {
        $courses = Course::with('professor')->get();
        $students = Student::all();
        return view('dashboard.admin.advising.create', compact('courses','students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'semester' => 'required',
        ]);

        $courses = collect(json_decode($request->courses));

        

        if ( $request->courses =="[null]") {
            return response()->json(['status'=>false,'message' => 'Please select courses']);
        }

        $student = Student::find($request->student_id);
        $student_advising  = $student->advising()->where('status','active')->get();

        if ($student_advising->count() > 0) {
            return response()->json(['status'=>false,'message' => 'This student already has advising in progress']);
        }

        $advising =  Advising::create([
            'student_id' => $request->student_id,
            'level' => $student->level,
            'semester' => $request->semester,
            'year' => date('Y'),
            'status' => 'active',
            'admin_id' => auth('admin')->user()->id,
        ]);

        foreach($courses as $course){
            $course = Course::find($course);

            $advising->courses()->insert([
                'student_id' => $student->id,
                'advising_id' => $advising->id,
                'course_id' => $course->id,
            ]);        

         }
        
        
        return response()->json(['status'=>true,'message' => 'Advising created successfully']);
        
    }

    public function show($id)
    {

        $advising = Advising::findOrfail($id);
        $student = $advising->student;
        return view('dashboard.admin.advising.view', compact('advising','student'));
    }

    public function edit($id)
    {
        $advising = Advising::where('status','active')->findOrfail($id);
        $courses = Course::with('professor')->get();
        $student = Student::findOrfail($advising->student_id);
        return view('dashboard.admin.advising.edit', compact('advising','courses','student'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'semester' => 'required',
        ]);

        $advising = Advising::findOrfail($request->id);
        $student = Student::find($request->student_id);
        

        if ( $request->courses =="[null]") {
            return response()->json(['status'=>false,'message' => 'Please select courses']);
        }

        $advising->courses()->delete();

        $courses = collect(json_decode($request->courses));

        foreach($courses as $course){
            $course = Course::find($course);

            $advising->courses()->insert([
                'student_id' => $student->id,
                'advising_id' => $advising->id,
                'course_id' => $course->id,
            ]);        

         }
       
        
        return response()->json(['status'=>true,'message' => 'Advising updated successfully']);
    }


    public function delete(Request $request)
    {
        $advising = Advising::findOrfail($request->id);
        $advising->delete();
        return response()->json(['status'=>true,'message' => 'Advising deleted successfully']);
    }

}
