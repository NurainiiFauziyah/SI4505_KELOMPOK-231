<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\DokterHewanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserHistoryController;

// Rute untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rute untuk register
Route::get('/register', [SessionController::class, 'get_register']);
Route::post('/register', [SessionController::class, 'post_register']);

// Rute untuk login
Route::get('/login', [SessionController::class, 'get_login']);
Route::post('/login', [SessionController::class, 'post_login']);

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout']);

// Rute untuk halaman beranda
Route::match(['get', 'post'], '/homepage', function () {
    return view('welcome');
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
Route::get('/dokter', [DokterHewanController::class, 'index'])->name('dokter.index');
Route::get('/dokter/create', [DokterHewanController::class, 'create'])->name('dokter.create');
Route::post('/dokter/store', [DokterHewanController::class, 'store'])->name('dokter.store');
Route::get('/dokter/{id}/edit', [DokterHewanController::class, 'edit'])->name('dokter.edit');
Route::put('/dokter/{id}/update', [DokterHewanController::class, 'update'])->name('dokter.update');
Route::delete('/dokter/{id}/destroy', [DokterHewanController::class, 'destroy'])->name('dokter.destroy');

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

// Rute untuk kamus penyakit
Route::get('/kamuspenyakit', function () {
    return view('kamuspenyakit.kamus');
})->name('kamuspenyakit');

// Rute untuk rekomendasi obat
Route::get('/rekomendasiobat', function () {
    return view('rekomendasi.recom');
})->name('rekomendasiobat');

// Rute untuk halaman profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

// Rute untuk halaman profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Rute untuk menampilkan profil pengguna
Route::get('/profile/show', function () {
    return view('profile.show');
})->name('profile.show');

use App\Http\Controllers\DiscussionController;

// Rute untuk forum
Route::get('/forum', [DiscussionController::class, 'index'])->name('diskusi.index');
Route::middleware('auth')->group(function () {
    Route::get('/forum/post', [DiscussionController::class, 'create'])->name('discussion.create');
    Route::post('/forum/store', [DiscussionController::class, 'store'])->name('store.diskusi');
});

// Rute untuk detail diskusi
Route::get('/forum/{id}', [DiscussionController::class, 'diskusiDetail'])->name('discussion.detail');

// Route riwayat
Route::get('/riwayat', [UserHistoryController::class, 'index'])->name('riwayat.index');

// Rute untuk komentar
Route::post('/discussion/{discussionId}/comment', [CommentController::class, 'store'])->name('comment.store');
