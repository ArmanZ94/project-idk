<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    function landing(){
        $artikels = Artikel::latest('id')->take(2)->get();
        return view('landing.index', compact('artikels'));
    }

    function article(){
        $artikels = Artikel::latest('id')->paginate(10);
        return view('landing.artikel', compact('artikels'));
    }

    function showartikel($id){

        $artikel = Artikel::findOrFail($id);
        return view('landing.showartikel', compact('artikel'));
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
