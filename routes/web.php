<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'welcome'])->name('welcome');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => ['auth','IsUnverified']], function () {
    Route::get('/verify', [AuthController::class,'verify'])->name('verify');
});

Route::group(['middleware' => ['auth','IsUser']], function () {
    Route::get('/absen', [AbsensiController::class,'absen'])->name('absensi.absen');
    Route::get('/absensi', [AbsensiController::class,'absensiHarian'])->name('absensi.absensi');
    Route::get('/absensi/total', [AbsensiController::class, 'totalAbsensiBulanan'])->name('absensi.totalabsensi');
});

Route::group(['middleware' => ['auth','IsAdmin']], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    //Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
	
	Route::get('/karyawan',[ KaryawanController::class,'k_daftar'])->name('karyawan.daftarkarya');
	Route::get('/karyawan/tambah',[ KaryawanController::class,'k_tambah'])->name('karyawan.tambah');
	Route::get('/karyawan/edit/{id}',[ KaryawanController::class,'k_edit'])->name('karyawan.edit');
	Route::post('/karyawan/simpan',[ KaryawanController::class,'k_simpan'])->name('karyawan.simpan');
	Route::delete('/karyawan/hapus/{id}',[ KaryawanController::class,'k_hapus'])->name('karyawan.hapus');
	Route::put('/karyawan/update/{id}',[ KaryawanController::class,'k_update'])->name('karyawan.update');

    Route::get('/user',[ UserController::class,'u_daftar'])->name('user.daftaruser');
	Route::get('/user/edit/{id}',[ UserController::class,'u_edit'])->name('user.edit');
	Route::delete('/user/hapus/{id}',[ UserController::class,'u_hapus'])->name('user.hapus');
	Route::put('/user/update/{id}',[ UserController::class,'u_update'])->name('user.update');
});

Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/blank', function() {
    return response('blank', 200);
})->name('blank');