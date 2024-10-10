<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{

    public function co_edit(){
        $contact = Contact::first();
        return view('contact.edit', compact('contact'));
    }

    public function co_update(Request $request)
    {
        $request->validate([
            'isi_contact' => 'required',
        ]);

        $contact = Contact::first(); // Misalkan Anda hanya memiliki satu record "About"
        $contact->update([
            'isi_contact' => $request->isi_contact, // Simpan konten HTML
        ]);

        return redirect()->route('contact.edit')->with('success', 'Banner berhasil dibuat!');
    }

}
