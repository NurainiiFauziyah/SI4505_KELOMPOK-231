<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
<<<<<<< Updated upstream
=======
})->name('homepage');

// Rute untuk reminder
Route::get('/reminder', [ReminderController::class, 'index'])->name('reminder.index');

// Rute untuk monitoring
Route::get('/monitoring', [MonitoringController::class, 'index'])->name('monitoring.index');
Route::post('/monitoring/filter', [MonitoringController::class, 'filter'])->name('monitoring.filter');

// Rute untuk tracking
Route::get('/trackings', [TrackingController::class, 'index'])->name('trackings.index');
Route::post('/trackings', [TrackingController::class, 'store'])->name('trackings.store');
Route::delete('/trackings/{id}', [TrackingController::class, 'destroy'])->name('trackings.destroy');

// Rute untuk konsultasi
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');

// Rute untuk katalog
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');


// CRUD Dokter Kesehatan Hewan
Route::get('/Dokter', [DokterHewanController::class, 'index'])->name('Dokter');
Route::get('/Dokter/create', [DokterHewanController::class, 'create'])->name('Dokter.create');
Route::post('/Dokter/store', [DokterHewanController::class, 'store'])->name('Dokter.store');
Route::get('/Dokter/{id}/edit', [DokterHewanController::class, 'edit'])->name('Dokter.edit');
Route::put('/Dokter/{id}/update', [DokterHewanController::class, 'update'])->name('Dokter.update');
Route::delete('/Dokter/{id}/destroy', [DokterHewanController::class, 'destroy'])->name('Dokter.destroy');

// Rute untuk forum
Route::get('/forum', function () {
    return view('Forum.forum');
})->name('forum');

// Rute untuk pemesanan
Route::get('/pemesanan', function () {
    return view('Pemesanan Vaksin.pemesanan');
})->name('pemesanan');

// Rute untuk panduan perawatan
Route::get('/panduanperawatan', function () {
    return view('panduan.rawat');
})->name('panduanperawatan');

// Rute untuk halaman profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
>>>>>>> Stashed changes
});
