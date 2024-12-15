<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\AboutController;

// Routing untuk Galeri
Route::get('/', [GaleriController::class, 'index']); // Menampilkan halaman utama
Route::get('/galeri/create', [GaleriController::class, 'create']); // Menampilkan form tambah galeri
Route::post('/galeri', [GaleriController::class, 'store']); // Menyimpan data galeri
Route::resource('galeri', GaleriController::class);


Route::get('/event', [EventController::class, 'index'])->name('event.index'); // Menampilkan data event
Route::get('/event/create', [EventController::class, 'create'])->name('event.create'); // Form tambah event
Route::post('/event', [EventController::class, 'store'])->name('event.store'); // Menyimpan data event


// Routing untuk Pengunjung
Route::get('/pengunjung/create', [PengunjungController::class, 'create']); // Menampilkan form tambah pengunjung
Route::post('/pengunjung', [PengunjungController::class, 'store']); // Menyimpan data pengunjung
Route::resource('pengunjung',PengunjungController ::class);

Route::get('/about', [AboutController::class, 'index'])->name('about');