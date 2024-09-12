<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Ruangan;
use App\Models\Gaji;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function k_daftar()
	{
		$karyawans = Karyawan::latest('id')->with('ruangan')->with('jabatan')->with('gaji')->paginate(7);

        return view('karyawan.daftarkarya', compact('karyawans'));
	}
	
	public function k_tambah()
    { 
        return view('karyawan.tambah');
    }

    public function k_simpan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'jabatan_id' => 'required|integer',
            'ruangan_id' => 'required|integer',
            'gaji_pokok' => 'required|integer',
        ]);

        //variable $namajabatan untuk mengambil nama_jabatan berdasar jabatan_id
        $namajabatan = Jabatan::find($request->jabatan_id)->nama_jabatan;

        $karyawanid = Karyawan::create([
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'ruangan_id' => $request->ruangan_id,
        ]);

        Gaji::create([
            'gaji_pokok' => $request->gaji_pokok,
            'note_gaji' => "$request->nama|$namajabatan",
            'karyawan_id' => $karyawanid->id,
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
            'nama' => 'required|string|max:50',
            'jabatan_id' => 'required|integer',
            'ruangan_id' => 'required|integer',
            'gaji_pokok' => 'required|integer',
        ]);

		$karyawan = Karyawan::findOrFail($id);
        $namajabatan = Jabatan::find($request->jabatan_id)->nama_jabatan;

        // Update data Karyawan
        $karyawan->update([
            'nama' => $request->nama,
            'jabatan_id' => $request->jabatan_id,
            'ruangan_id' => $request->ruangan_id,
        ]);

        // Update data Gaji terkait
        $karyawan->gaji->update([
            'gaji_pokok' => $request->gaji_pokok,
            'note_gaji' => "$request->nama|$namajabatan",
        ]);

        return redirect()
            ->route('karyawan.daftarkarya');
    }
}
