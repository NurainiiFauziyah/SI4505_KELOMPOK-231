<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterHewanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('Konsultasi.index');

//CRUD Dokter Kesehatan Hewan
Route::get('/Dokter', [DokterHewanController::class, 'index'])->name('Dokter');
Route::get('/Dokter/create', [DokterHewanController::class, 'create'])->name('Dokter.create');
Route::post('/Dokter/store', [DokterHewanController::class, 'store'])->name('Dokter.store');
Route::get('/Dokter/{id}/edit', [DokterHewanController::class, 'edit'])->name('Dokter.edit');
Route::put('/Dokter/{id}/update', [DokterHewanController::class, 'update'])->name('Dokter.update');
Route::delete('/Dokter/{id}/destroy', [DokterHewanController::class, 'destroy'])->name('Dokter.destroy');



