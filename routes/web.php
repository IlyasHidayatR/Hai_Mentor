<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeasiswaController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\PelatihanController;

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
    return view('dashboard');
});

Route::get('/detailbeasiswa', function () {
    return view('beasiswa.detailbeasiswa');
});

Route::get('/beasiswa', [BeasiswaController::class, 'index']);
Route::get('/beasiswa/{id}', [BeasiswaController::class, 'detail']);

Route::get('/karir', [KarirController::class, 'index']);
Route::get('/karir/{id}', [KarirController::class, 'detail']);

Route::get('/pelatihan', [PelatihanController::class, 'index']);
Route::get('/pelatihan/{id}', [PelatihanController::class, 'detail']);
