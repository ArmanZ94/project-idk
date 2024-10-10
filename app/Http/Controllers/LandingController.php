<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\About;
use App\Models\Contact;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing(){
        $artikels = Artikel::latest('id')->take(2)->get();
        $banners = Banner::all();
        return view('landing.index', compact('artikels','banners'));
    }

    public function article(){
        $artikels = Artikel::latest('id')->paginate(10);
        return view('landing.artikel', compact('artikels'));
    }

    public function showartikel($id){
        $artikel = Artikel::findOrFail($id);
        return view('landing.showartikel', compact('artikel'));
    }

    public function about(){
        $about = About::first();  // Ini mengambil satu baris saja, bukan collection

        if ($about) {
            return view('landing.about', compact('about'));
        } else {
            return view('landing.about');
        }
    }

    public function typography(){
        return view('landing.typography');
    }

    public function contacts(){
        $contact = Contact::first();  // Ini mengambil satu baris saja, bukan collection

        if ($contact) {
            return view('landing.contacts', compact('contact'));
        } else {
            return view('landing.contacts');
        }
    }
}
