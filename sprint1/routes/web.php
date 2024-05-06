<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/register',[SessionController::class, 'get_register']);
Route::post('/register',[SessionController::class, 'post_register']);

Route::get('/login',[SessionController::class, 'get_login']);
Route::post('/login',[SessionController::class, 'post_login']);

Route::get('/sesi/logout',[SessionController::class, 'logout']);