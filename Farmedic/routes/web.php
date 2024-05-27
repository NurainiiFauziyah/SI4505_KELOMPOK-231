<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterHewanController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\SessionController;



Route::get('/', function () {
    return view('register');
});

Route::get('/register',[SessionController::class, 'get_register']);
Route::post('/register',[SessionController::class, 'post_register']);

Route::get('/login',[SessionController::class, 'get_login']);
Route::post('/login',[SessionController::class, 'post_login']);

Route::get('/sesi/logout',[SessionController::class, 'logout']);

Route::match(['get', 'post'], '/homepage', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('home'); //


Route::get('/reminder', [ReminderController::class, 'index'])->name('reminder.index');

Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
Route::post('/monitoring/filter', [MonitoringController::class, 'filter'])->name('monitoring.filter');



Route::get('/trackings', [TrackingController::class, 'index'])->name('trackings.index');
Route::post('/trackings', [TrackingController::class, 'store'])->name('trackings.store');
Route::delete('/trackings/{id}', [TrackingController::class, 'destroy'])->name('trackings.destroy');



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
