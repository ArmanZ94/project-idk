<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function ga_simpan(Request $request)
    {
    $request->validate([
        'img_galeri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
    ]);

    $image = $request->file('img_galeri');
    $image->storeAs('public/images/galeri', $image->hashName());

    // Buat galeri
    Galeri::create([
        'img_galeri' => $image->hashName(),
    ]);

    return redirect()->route('galeri.daftargaleri')->with('success', 'Galeri berhasil dibuat!');
    }

    public function ga_daftar()
	{
		$galeris = Galeri::latest('id')->paginate(5);

        return view('galeri.daftargaleri', compact('galeris'));
	}
	
	public function ga_tambah()
    { 
        return view('galeri.tambah');
    }
	
	public function ga_hapus($id)
    {
		$galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()
            ->route('galeri.daftargaleri');
    }
	
	public function ga_edit($id)
    {
		$galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    public function ga_update(Request $request, $id)
    {
        $request->validate([
            'img_galeri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);
        
		$galeri = Galeri::findOrFail($id);

        if ($request->hasFile('img_galeri')) {

            //upload new image
            $image = $request->file('img_galeri');
            $image->storeAs('public/images/galeri', $image->hashName());

            //delete old image
            Storage::delete('public/images/galeri/'.$galeri->img_galeri);

            //update product with new imag
            $galeri->update([
                'img_galeri' => $image->hashName(),
            ]);

        } else {
            //update product without image
            $galeri->update([

            ]);
        }
        return redirect()->route('galeri.daftargaleri');
    }

}
