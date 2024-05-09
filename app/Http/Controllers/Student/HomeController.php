<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Admin;
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
        $student = auth('student')->user();
        $student = Student::findOrFail($student->id);
        $supervisor = $student->supervisor_id ? 1 : 0;
        $notices = $student->notices()->latest()->orderBy('id','desc')->limit(5)->get();
        if ($student->activeAdvising) {
            $courses = $student->activeAdvising->courses->load('course')->load('course.professor')->count();
        } else {
            $courses = 0;
        }
        return view('dashboard.student.home', compact('student', 'notices', 'courses', 'supervisor'));
    }

    public function MySupervisors(){

        $student = auth('student')->user();
        $student = Student::findOrFail($student->id);
        $supervisors = Admin::where('id',$student->supervisor_id)->get();

        return view('dashboard.student.advising.supervisors', compact('student', 'supervisors'));
    }

    public function PrintAdvising($id)
    {
        $student = auth('student')->user();
        $advising = Advising::where('student_id',$student->id)->findOrFail($id);
        return view('dashboard.student.advising.view', compact('student', 'advising'));
    }


    public function viewAdmissionForm()
    {
        $student = auth('student')->user();
        $student = Student::findOrFail($student->id);
        return view('dashboard.student.admission.view', compact('student'));
    }

    public function courses()
    {
        $student = auth('student')->user()->id;
        $student = Student::with('activeAdvising')->findOrFail($student);
        $activeAdvising = $student->activeAdvising;
        if ($activeAdvising) { $courses = $student->activeAdvising->courses->load('course')->load('course.professor');} else { $courses = [];} 

        return view('dashboard.student.courses.index', compact('student', 'courses'));
    } 

    public function routine()
    {
        $student = auth('student')->user()->id;
        $student = Student::with('activeAdvising')->findOrFail($student);
        $activeAdvising = $student->activeAdvising;
        if ($activeAdvising) { $courses = $student->activeAdvising->courses->load('course')->load('course.professor');} else { $courses = [];}

        return view('dashboard.student.advising.routine', compact('student', 'courses'));
    }

    public function exams()
    {
        $student = auth('student')->user()->id;
        $student = Student::with('activeAdvising')->findOrFail($student);
        $activeAdvising = $student->activeAdvising;
        if ($activeAdvising) { $courses = $student->activeAdvising->courses->load('course');} else { $courses = [];}
        return view('dashboard.student.advising.exams', compact('student', 'courses'));
    }

    public function marks()
    {
        $student = auth('student')->user()->id;
        $student = Student::findOrFail($student);
        $advising = $student->lastAdvising;
        if ($advising) {
            $courses = $advising->marks->load('course');
        } else {
            $courses = [];
        }

        return view('dashboard.student.advising.marks', compact('student', 'courses', 'advising'));
    }
}
