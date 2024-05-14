<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advising;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class AdvisingController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:View Advisings', ['only' => ['index','show']]);
        $this->middleware('permission:Add Advising', ['only' => ['create','store']]);
        $this->middleware('permission:Edit Advising', ['only' => ['edit','update']]);
        $this->middleware('permission:Delete Advising', ['only' => ['delete']]);
    }

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

        $student = Student::find($request->student_id);
        $courses = collect(json_decode($request->courses));        

        if ( $request->courses =="[null]") {
            return response()->json(['status'=>false,'message' => 'Please select courses']);
        }

        $last_advising_semester = $student->lastAdvising ? $student->lastAdvising->semester : 0;
        $active_advising_semester = $student->activeAdvising ? $student->activeAdvising->semester : null;

        if($active_advising_semester){
            return response()->json(['status'=>false,'message' => 'This student has already advising in progress']);
        }elseif($last_advising_semester == 0 && $request->semester != 1){
            return response()->json(['status'=>false,'message' => 'This student must be advised in semester 1 first']);
        }elseif ($request->semester < $last_advising_semester ) {
            return response()->json(['status'=>false,'message' => 'This student has must be advised in semester '.($last_advising_semester+1).' first']);
        }elseif ($last_advising_semester == $request->semester) {
            return response()->json(['status'=>false,'message' => 'This student has already advised in this semester']);
        }

        $courses_hours = $this->getCourseHours($courses);

        if ($courses_hours < $student->credit_hours_available || $courses_hours > $student->credit_hours_available) {
            return response()->json(['status'=>false,'message' => 'The total hours of the courses must be '.$student->credit_hours_available]);
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

    public function getDataByStudent(Request $request)
    {
        $student = Student::find($request->student_id);
        return response()->json(['status'=>true,'data' => $student]);
    }

    public function getCourseHours($courses)
    {
        $hours = 0;
        foreach($courses as $course){
            $course = Course::find($course);
            $hours += $course->hours;
        }
        return $hours;
    }


}
