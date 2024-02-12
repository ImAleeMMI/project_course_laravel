<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteCourse extends Controller
{
    public function homepage()
    {
        return view('pages.homepage');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function courseDetail()
    {
        return view('pages.detail');
    }
    public function ourFeatures()
    {
        return view('pages.features');
    }
    public function istructors()
    {
        return view('pages.istructors');
    }
    public function testimonial()
    {
        return view('pages.testimonial');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function subscription()
    {
        $user = Auth::user();
    }
    public function unsubscription()
    {
        
    }
}
