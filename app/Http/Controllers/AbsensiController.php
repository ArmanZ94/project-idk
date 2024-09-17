<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\User;

class AbsensiController extends Controller
{

    public function absen()
    {
        return view('absensi.absen');
    }

    public function absensiHarian(Request $request)
{
    // Mendapatkan user yang sedang login
    $user = auth()->user();

    // Mendapatkan karyawan terkait
    $karyawan = $user->karyawan;

    // Mendapatkan gaji terkait
    $gaji = $karyawan->gaji;

    // Cek apakah sudah absen hari ini
    $today = now()->format('Y-m-d');
    $absensiHariIni = Absensi::where('gaji_id', $gaji->id)
                            ->whereDate('bulan_tahun', $today)
                            ->first();

    if ($absensiHariIni) {
        return response()->json(['message' => 'Anda sudah melakukan absensi hari ini.'], 400);
    }

    // Waktu jam masuk dan keluar dari request atau setting jam default
    $jamMasuk = $request->input('jam_masuk', '09:00');
    $jamKeluar = $request->input('jam_keluar', '17:00');
    $current_time = now()->format('H:i:s');

    // Jika waktu absensi berada di rentang jam masuk dan keluar, buat log absensi
    if ($current_time >= $jamMasuk && $current_time <= $jamKeluar) {
        Absensi::create([
            'gaji_id' => $gaji->id,
            'jam_masuk' => $jamMasuk,
            'jam_keluar' => $jamKeluar,
            'bulan_tahun' => $today
        ]);

        return response()->json(['message' => 'Absensi berhasil.']);
    }

    return response()->json(['message' => 'Absensi tidak dapat dilakukan di luar jam kerja.'], 400);
}

public function totalAbsensiBulanan(Request $request)
{
    // Mendapatkan user yang sedang login
    $user = auth()->user();

    // Mendapatkan karyawan terkait
    $karyawan = $user->karyawan;

    // Mendapatkan gaji terkait
    $gaji = $karyawan->gaji;

    // Mendapatkan bulan dan tahun dari request atau default ke bulan dan tahun sekarang
    $bulan = $request->input('bulan', now()->month);
    $tahun = $request->input('tahun', now()->year);

    $totalAbsensi = $gaji->hitungAbsensiPerBulanTahun($bulan, $tahun);

    return response()->json(['total_absensi' => $totalAbsensi]);
}


}
