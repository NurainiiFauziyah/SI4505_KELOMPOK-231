<?php

use App\Http\Controllers\RegisterController;
use App\Models\Register;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('logres');
});

Route::get('/register', [RegisterController::class, 'get_register']);
Route::get('/login', [RegisterController::class, 'get_login']);
Route::get('/logout', [RegisterController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'post_register']);
Route::post('/login', [RegisterController::class, 'post_login']);