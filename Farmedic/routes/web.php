<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\DokterHewanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserHistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;


// Route homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route konsultasi
Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');

// CRUD Dokter Kesehatan Hewan
Route::prefix('dokter')->name('dokter.')->group(function () {
    Route::get('/', [DokterHewanController::class, 'index'])->name('index');
    Route::get('/create', [DokterHewanController::class, 'create'])->name('create');
    Route::post('/store', [DokterHewanController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DokterHewanController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DokterHewanController::class, 'update'])->name('update');
    Route::delete('/{id}', [DokterHewanController::class, 'destroy'])->name('destroy');
});


Route::get('/forum', [DiscussionController::class, 'index'])->name('diskusi.index');
Route::get('/forum/post', [DiscussionController::class, 'create'])->name('discussion.create');
Route::post('/forum/store', [DiscussionController::class, 'store'])->name('store.diskusi');
Route::get('/forum/{id}', [DiscussionController::class, 'diskusiDetail'])->name('discussion.detail');


Route::get('/pemesanan', function () {
    return view('Pemesanan Vaksin.pemesanan');
})->name('pemesanan');

Route::get('/register', [SessionController::class, 'get_register'])->name('register');
Route::post('/register', [SessionController::class, 'post_register']);

// Route login
Route::get('/login', [SessionController::class, 'get_login'])->name('login');
Route::post('/login', [SessionController::class, 'post_login']);
// Route untuk halaman welcome mendukung GET dan POST
Route::match(['get', 'post'], '/welcome', [HomeController::class, 'index'])->name('home');

// Route logout
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

// Route riwayat
Route::get('/riwayat', [UserHistoryController::class, 'index'])->name('riwayat.index');
Route::post('/discussion/{discussionId}/comment', [CommentController::class, 'store'])->name('comment.store');
