<?php

use App\Http\Controllers\KamusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panduanperawatan', function () {
    return view('panduan.rawat');
});

// // Route::get('/kamuspenyakit', function () {
//     return view('kamuspenyakit.datakamus');
// });

Route::get('/rekomendasiobat', function () {
    return view('rekomendasi.recom');
});

Route::get('/deskripsipenyakit', function () {
    return view('kamuspenyakit.deskripsi');
});


Route::get('/kamuspenyakit', [KamusController::class, 'index']);
Route::get('/kamuspenyakit/create', [KamusController::class, 'create']);
Route::post('/kamuspenyakit/store', [KamusController::class, 'store']);
Route::get('/kamuspenyakit/{id}/edit', [KamusController::class, 'edit']);
Route::put('/kamuspenyakit/{id}', [KamusController::class, 'update']);
Route::delete('/kamuspenyakit/{id}', [KamusController::class, 'destroy']);


// Route::get('/kamuspenyakit/create', [KamusController::class, 'create']) -> name ('kamuspenyakit.create');
// Route::post('/kamuspenyakit/store', [KamusController::class, 'store'])->name('kamuspenyakit.store');


