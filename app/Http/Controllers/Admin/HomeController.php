<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Course;
use App\Models\Notice;
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
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $students = Student::count();
        $users = Admin::count();
        $courses = Course::count();
        $notices = Notice::active()->count();
        $lastNotices = Notice::active()->orderBy('id','desc')->limit(5)->get();
        $admin = Admin::find(auth('admin')->user()->id);
        return view('dashboard.admin.home', compact('students', 'users', 'courses', 'notices', 'lastNotices', 'admin'));
    }
    
}
