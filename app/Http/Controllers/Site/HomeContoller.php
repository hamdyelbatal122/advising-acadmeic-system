<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function home()
    {
        $students_count = Student::count();
        $professors_count = Admin::count();
        $graduation_count = 500; 
        return view('site.home', compact('students_count', 'professors_count', 'graduation_count'));
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function about()
    {
        return view('site.about');
    }

    public function professors()
    {
        $professors = Admin::all();
        return view('site.professors', compact('professors'));
    }

    public function events()
    {
        return view('site.events');
    }

    public function gallery()
    {
        return view('site.gallery');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function advising()
    {
        return view('site.advising');
    }
}
