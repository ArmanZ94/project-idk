<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function landing(){
        return view('landing.index');
    }

    function about(){
        return view('landing.about');
    }

    function typography(){
        return view('landing.typography');
    }

    function contacts(){
        return view('landing.contacts');
    }
}
