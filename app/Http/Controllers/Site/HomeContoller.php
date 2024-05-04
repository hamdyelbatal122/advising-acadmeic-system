<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function home()
    {
        return view('site.home');
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
        return view('site.professors');
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
