<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Contactus;
use Mail;
use App\Mail\MailContactus;
use Illuminate\Support\Facades\Storage;

class ContactusController extends Controller
{

    public function cu_daftar()
	{
		$contactus = Contactus::latest('id')->paginate(5);

        return view('contactus.daftarcontactus', compact('contactus'));
	}

    public function cu_hapus($id)
    {
		$contactus = Contactus::findOrFail($id);
        $contactus->delete();
        return redirect()->route('contactus.daftarcontactus');
    }

    public function cu_view($id)
    {
		$contactus = Contactus::findOrFail($id);
        return view('contactus.view', compact('contactus'));
    }

    //============================ Landing ==================================
    public function cu_simpan(Request $request)
    {
    $request->validate([
        'email_contact_us' => 'required|string',
        'isi_contact_us' => 'required|string',
        'nama_contact_us' => 'required|string'
    ]);

    Contactus::create([
        'email_contact_us' => $request->email_contact_us,
        'isi_contact_us' => $request->isi_contact_us,
        'nama_contact_us' => $request->nama_contact_us,
    ]);

    Mail::to('ibnuzaky9444@gmail.com')->send(new MailContactus([
        'header'=> 'Hi, admin ada pesan dari ContactUs, '.$request->nama_contact_us.' | '.$request->email_contact_us,
        'isi'=> $request->isi_contact_us
    ]));
    
    return redirect()->route('contacts')->with('success', 'Pesan terkirim!');
    }

}
