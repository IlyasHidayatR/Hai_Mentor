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
    return view('dashboard1');
});

Route::get('/beasiswa', [BeasiswaController::class, 'index']);
Route::get('/beasiswa/{id}', [BeasiswaController::class, 'detail']);
Route::get('/search/beasiswa', [BeasiswaController::class, 'searchBeasiswa']);

Route::get('/karir', [KarirController::class, 'index']);
Route::get('/karir/{id}', [KarirController::class, 'detail']);
Route::get('/search/karir', [KarirController::class, 'searchKarir']);

Route::get('/pelatihan', [PelatihanController::class, 'index']);
Route::get('/pelatihan/{id}', [PelatihanController::class, 'detail']);
Route::get('/search/pelatihan', [PelatihanController::class, 'searchPelatihan']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
