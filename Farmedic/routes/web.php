<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterHewanController;
use App\Http\Controllers\KatalogController;


Route::get('/', function () {
    return view('welcome');
})->name('home'); // Menamai rute homepage sebagai 'home'


Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('Konsultasi.index');

Route::get('/katalog', [KatalogController::class, 'index'])->name('Katalog.index');


//CRUD Dokter Kesehatan Hewan
Route::get('/Dokter', [DokterHewanController::class, 'index'])->name('Dokter');
Route::get('/Dokter/create', [DokterHewanController::class, 'create'])->name('Dokter.create');
Route::post('/Dokter/store', [DokterHewanController::class, 'store'])->name('Dokter.store');
Route::get('/Dokter/{id}/edit', [DokterHewanController::class, 'edit'])->name('Dokter.edit');
Route::put('/Dokter/{id}/update', [DokterHewanController::class, 'update'])->name('Dokter.update');
Route::delete('/Dokter/{id}/destroy', [DokterHewanController::class, 'destroy'])->name('Dokter.destroy');

Route::get('/forum', function () {
    return view('Forum.forum');
})->name('forum');

Route::get('/pemesanan', function () {
    return view('Pemesanan Vaksin.pemesanan');
})->name('pemesanan');


Route::get('/panduanperawatan', function () {
    return view('panduan.rawat');
});

Route::get('/kamuspenyakit', function () {
    return view('kamuspenyakit.kamus');
});

Route::get('/rekomendasiobat', function () {
    return view('rekomendasi.recom');
});
