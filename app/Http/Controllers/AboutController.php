<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function ab_edit(){
        $about = About::first();
        return view('about.edit', compact('about'));
    }

    public function ab_update(Request $request)
    {
        $request->validate([
            'isi_about' => 'required',
        ]);

        $about = About::first(); // Misalkan Anda hanya memiliki satu record "About"
        $about->update([
            'isi_about' => $request->isi_about, // Simpan konten HTML
        ]);

        return redirect()->route('about.edit')->with('success', 'Banner berhasil dibuat!');
    }

}
