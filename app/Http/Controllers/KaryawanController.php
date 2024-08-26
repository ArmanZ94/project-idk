<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function k_daftar()
	{
		$karyawans = Karyawan::latest()->get();
		return view('karyawan.daftarkarya', compact('karyawans'));
	}
	
	public function k_tambah()
    { 
        return view('karyawan.tambah');
    }

    public function k_simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255'
        ]);

        $karyawan = Karyawan::create([
            'nama' => $request->nama
        ]);

        return redirect()
            ->route('karyawan.daftarkarya');
    }
	
	public function k_hapus($id)
    {
		$karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()
            ->route('karyawan.daftarkarya');
    }
	
	public function k_edit($id)
    {
		$karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    public function k_update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

		$karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()
            ->route('karyawan.daftarkarya');
    }
}
