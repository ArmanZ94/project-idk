<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function a_simpan(Request $request)
    {
    $request->validate([
        'judul_artikel' => 'required|string|max:255',
        'isi_artikel' => 'required|string',
        'img_artikel' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048'
    ]);

    $image = $request->file('img_artikel');
    $image->storeAs('public/images/artikel', $image->hashName());

    // Buat artikel
    $request->user()->artikel()->create([
        'judul_artikel' => $request->judul_artikel,
        'isi_artikel' => $request->isi_artikel,
        'img_artikel' => 'images/artikel/'.$image->hashName(),
    ]);

    return redirect()->route('artikel.daftarartikel')->with('success', 'Artikel berhasil dibuat!');
    }

    public function a_daftar()
	{
		$artikels = Artikel::latest('id')->with('user')->paginate(5);

        return view('artikel.daftarartikel', compact('artikels'));
	}

	public function a_tambah()
    { 
        return view('artikel.tambah');
    }
	
	public function a_hapus($id)
    {
		$artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()
            ->route('artikel.daftarartikel');
    }
	
	public function a_edit($id)
    {
		$artikel = Artikel::findOrFail($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function a_update(Request $request, $id)
    {
        $request->validate([
            'judul_artikel' => 'required|string|max:255',
            'isi_artikel' => 'required|string',
            'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);

		$artikel = Artikel::findOrFail($id);

        if ($request->hasFile('img_artikel')) {

            //upload new image
            $image = $request->file('img_artikel');
            $image->storeAs('public/images/artikel', $image->hashName());

            //delete old image
            //Storage::delete('public/'.$artikel->img_artikel);

            //update product with new imag
            $artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
                'img_artikel' => 'images/artikel/'.$image->hashName(),
            ]);

        } else {
            //update product without image
            $artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
            ]);
        }
        return redirect()->route('artikel.daftarartikel');
    }

    //================================== USER ACCESS =================================

    public function a_daftar_user()
	{
        $userId = Auth::id();
		$artikels = Artikel::where('user_id', $userId)->latest('id')->with('user')->paginate(5);

        return view('artikel.user.daftarartikel', compact('artikels'));
	}

    public function a_tambah_user()
    { 
        return view('artikel.user.tambah');
    }

    public function a_simpan_user(Request $request)
    {
    $request->validate([
        'judul_artikel' => 'required|string|max:255',
        'isi_artikel' => 'required|string',
        'img_artikel' => 'required|image|mimes:jpeg,png,jpg,gif|max:12048'
    ]);

    $image = $request->file('img_artikel');
    $image->storeAs('public/images/artikel', $image->hashName());

    // Buat artikel
    $request->user()->artikel()->create([
        'judul_artikel' => $request->judul_artikel,
        'isi_artikel' => $request->isi_artikel,
        'img_artikel' => 'images/artikel/'.$image->hashName(),
    ]);

    return redirect()->route('artikel.user.daftarartikel')->with('success', 'Artikel berhasil dibuat!');
    }

    public function a_edit_user($id)
    {
		$artikel = Artikel::findOrFail($id);
        return view('artikel.user.edit', compact('artikel'));
    }

    public function a_update_user(Request $request, $id)
    {
        $request->validate([
            'judul_artikel' => 'required|string|max:255',
            'isi_artikel' => 'required|string',
            'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:12048'
        ]);

		$artikel = Artikel::findOrFail($id);

        if ($request->hasFile('img_artikel')) {

            //upload new image
            $image = $request->file('img_artikel');
            $image->storeAs('public/images/artikel', $image->hashName());

            //delete old image
            Storage::delete('public/'.$artikel->img_artikel);

            //update product with new imag
            $artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
                'img_artikel' => 'images/artikel/'.$image->hashName(),
            ]);

        } else {
            //update product without image
            $artikel->update([
                'judul_artikel' => $request->judul_artikel,
                'isi_artikel' => $request->isi_artikel,
            ]);
        }
        return redirect()->route('artikel.user.daftarartikel');
    }

    public function a_hapus_user($id)
    {
		$artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()
            ->route('artikel.user.daftarartikel');
    }

}
