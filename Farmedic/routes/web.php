<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panduanperawatan', function () {
    return view('panduan.rawat');
});

Route::get('/kamuspenyakit', function () {
    return view('kamuspenyakit.kamus');
});

Route::get('/rekomendasiobat', function () {
    return view('rekomendasi.recom');
});
