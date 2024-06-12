<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\DokterHewanController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserHistoryController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KamusController;
use App\Http\Controllers\RekomendasiObatController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\VaccineController;

// Rute untuk halaman utama
Route::get('/', function () {
    return redirect('/login');
});

// Rute untuk register
Route::get('/register', [SessionController::class, 'get_register']);
Route::post('/register', [SessionController::class, 'post_register']);

// Rute untuk login
Route::get('/login', [SessionController::class, 'get_login']);
Route::post('/login', [SessionController::class, 'post_login']);

// Rute untuk logout
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

// Rute untuk halaman beranda


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
});

// Rute untuk halaman profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');


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

// Rute untuk berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome.index');
// Rute untuk kamus
Route::get('/kamuspenyakit', [KamusController::class, 'index']);
Route::get('/kamus/{id}', [KamusController::class, 'show']);

// Rute untuk rekomendasi obat
Route::get('/rekomendasi_obat', [RekomendasiObatController::class, 'index']);

Route::view('/kamus-penyakit', 'detailkamus.detail');
Route::post('/api/katalog/choice', [ProfileController::class, 'saveKatalogChoice'])->name('api.katalog.choice');
Route::post('/api/vaksin/pesan', [UserHistoryController::class, 'pesanVaksin'])->name('vaksin.pesan');
// Rute untuk katalog
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');