<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Advising;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = auth()->user();
        $notices = $student->notices()->latest()->orderBy('id','desc')->limit(5)->get();
        return view('dashboard.student.home', compact('student', 'notices'));
    }

    public function PrintAdvising($id)
    {
        $student = auth()->user();
        $advising = Advising::where('status','active')->where('student_id',$student->id)->findOrFail($id);
        return view('dashboard.student.advising.view', compact('student', 'advising'));
    }


    public function viewAdmissionForm()
    {
        $student = auth()->user();
        $student = Student::findOrFail($student->id);
        return view('dashboard.student.admission.view', compact('student'));
    }

    public function courses()
    {
        $student = auth()->user();
        $courses = $student->activeAdvising->courses->load('course')->load('course.professor');
        return view('dashboard.student.courses.index', compact('student', 'courses'));
    } 

    public function routine()
    {
        $student = auth()->user();
        $courses = $student->activeAdvising->courses->load('course')->load('course.professor');
        return view('dashboard.student.advising.routine', compact('student', 'courses'));
    }
}
