<?php

use App\Http\Controllers\AuthController;
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

Route::group(['middleware' => ['auth','IsAdmin']], function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    //Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
	
	Route::get('/karyawan',[ KaryawanController::class,'k_daftar'])->name('karyawan.daftarkarya');
	Route::get('/karyawan/tambah',[ KaryawanController::class,'k_tambah'])->name('karyawan.tambah');
	Route::get('/karyawan/edit/{id}',[ KaryawanController::class,'k_edit'])->name('karyawan.edit');
	Route::post('/karyawan/simpan',[ KaryawanController::class,'k_simpan'])->name('karyawan.simpan');
	Route::delete('/karyawan/hapus/{id}',[ KaryawanController::class,'k_hapus'])->name('karyawan.hapus');
	Route::put('/karyawan/update/{id}',[ KaryawanController::class,'k_update'])->name('karyawan.update');
});

Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::get('/blank', function() {
    return response('blank', 200);
})->name('blank');