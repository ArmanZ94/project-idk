<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;

class ArtikelController extends Controller
{
    public function a_simpan(Request $request)
    {
    $request->validate([
        'judul_artikel' => 'required|string|max:255',
        'isi_artikel' => 'required|string',
        'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Upload gambar jika ada
    $imagePath = null;
    if ($request->hasFile('img_artikel')) {
        $imagePath = $request->file('img_artikel')->store('image_artikel', 'public');
    }

    // Buat artikel
    $request->user()->artikel()->create([
        'judul_artikel' => $request->judul_artikel,
        'isi_artikel' => $request->isi_artikel,
        'img_artikel' => $imagePath,
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
            'img_artikel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

		$artikel = Artikel::findOrFail($id);
        $artikel->update([
            'judul_artikel' => $request->judul_artikel,
            'isi_artikel' => $request->isi_artikel,
            'img_artikel' => $request->img_artikel,
        ]);

        return redirect()
            ->route('artikel.daftarartikel');
    }

}
