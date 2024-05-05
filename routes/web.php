<?php

use App\Http\Controllers\KamuspenyakitController;
use Illuminate\Support\Facades\Route;

Route::get('/kamuspenyakit', function () {
    return view('kamuspenyakit.index');
});

Route::get('/kamus', function () {
    return view('kamuspenyakit.kamus');
});


Route::get('/rekomendasiobat',[KamuspenyakitController::class,'index']
    
);

Route::get('/panduanperawatan',[KamuspenyakitController::class,'panduan']

    
);



