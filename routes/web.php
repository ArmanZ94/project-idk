<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

    Route::get('/', [LandingController::class, 'landing'])->name('landing');
    Route::get('/article', [LandingController::class, 'article'])->name('article');
    Route::get('/showarticle/{id}', [LandingController::class, 'showartikel'])->name('showartikel');
    Route::get('/about', [LandingController::class, 'about'])->name('about');
    Route::get('/gallery', [LandingController::class, 'gallery'])->name('gallery');
    Route::get('/typography', [LandingController::class, 'typography'])->name('typography');
    Route::get('/contacts', [LandingController::class, 'contacts'])->name('contacts');
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
	Route::post('/karyawan',[ KaryawanController::class,'k_simpan'])->name('karyawan.simpan');
	Route::delete('/karyawan/hapus/{id}',[ KaryawanController::class,'k_hapus'])->name('karyawan.hapus');
	Route::put('/karyawan/update/{id}',[ KaryawanController::class,'k_update'])->name('karyawan.update');

    Route::get('/user',[ UserController::class,'u_daftar'])->name('user.daftaruser');
	Route::get('/user/edit/{id}',[ UserController::class,'u_edit'])->name('user.edit');
	Route::delete('/user/hapus/{id}',[ UserController::class,'u_hapus'])->name('user.hapus');
	Route::put('/user/update/{id}',[ UserController::class,'u_update'])->name('user.update');

    Route::get('/artikel', [ArtikelController::class, 'a_daftar'])->name('artikel.daftarartikel');
    Route::get('/artikel/tambah', [ArtikelController::class, 'a_tambah'])->name('artikel.tambah'); 
    Route::get('/artikel/edit/{id}', [ArtikelController::class, 'a_edit'])->name('artikel.edit');
    Route::post('/artikel', [ArtikelController::class, 'a_simpan'])->name('artikel.simpan'); 
    Route::delete('/artikel/hapus/{id}', [ArtikelController::class, 'a_hapus'])->name('artikel.hapus');
    Route::put('/artikel/update/{id}', [ArtikelController::class, 'a_update'])->name('artikel.update');

    Route::get('/banner', [BannerController::class, 'b_daftar'])->name('banner.daftarbanner');
    Route::get('/banner/tambah', [BannerController::class, 'b_tambah'])->name('banner.tambah'); 
    Route::get('/banner/edit/{id}', [BannerController::class, 'b_edit'])->name('banner.edit');
    Route::post('/banner', [BannerController::class, 'b_simpan'])->name('banner.simpan'); 
    Route::delete('/banner/hapus/{id}', [BannerController::class, 'b_hapus'])->name('banner.hapus');
    Route::put('/banner/update/{id}', [BannerController::class, 'b_update'])->name('banner.update');

    Route::get('/galeri', [GaleriController::class, 'ga_daftar'])->name('galeri.daftargaleri');
    Route::get('/galeri/tambah', [GaleriController::class, 'ga_tambah'])->name('galeri.tambah'); 
    Route::get('/galeri/edit/{id}', [GaleriController::class, 'ga_edit'])->name('galeri.edit');
    Route::post('/galeri', [GaleriController::class, 'ga_simpan'])->name('galeri.simpan'); 
    Route::delete('/galeri/hapus/{id}', [GaleriController::class, 'ga_hapus'])->name('galeri.hapus');
    Route::put('/galeri/update/{id}', [GaleriController::class, 'ga_update'])->name('galeri.update');

    Route::get('/aboutedit', [AboutController::class, 'ab_edit'])->name('about.edit');
    Route::put('/aboutedit', [AboutController::class, 'ab_update'])->name('about.update');

    Route::get('/contactedit', [ContactController::class, 'co_edit'])->name('contact.edit');
    Route::put('/contactedit', [ContactController::class, 'co_update'])->name('contact.update');
});

Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/blank', function() {
    return response('blank', 200);
})->name('blank');


