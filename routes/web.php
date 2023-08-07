<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'guest'], function () {
    Route::get('/daftar',[UserController::class,'daftar']);
    Route::get('/masuk',[UserController::class,'masuk'])->name('masuk');
    Route::post('/register',[UserController::class,'register']);
    Route::post('/login',[UserController::class,'login']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/detail_user/{user_id}',[UserController::class,'detail']);
    Route::get('/user',[UserController::class,'index']);
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});
