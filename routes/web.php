<?php

use App\Http\Controllers\PendidikController;
use App\Http\Controllers\PsbController;
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
    return view('frontend.homepage');
})->name('homepage');

Route::get('/pendidik', [PendidikController::class, 'index'])->name('pendidik');
Route::get('/pendidik/details', [PendidikController::class, 'details'])->name('details_pendidik');
Route::get('/psb', [PsbController::class, 'index'])->name('psb');

Route::get('legalitas', function () { return view('frontend.profil.legalitas_yayasan'); })->name('legalitas');

Route::get('/keuangan', function () { return view('frontend.profil.pengolahan_keuangan'); })->name('keuangan');

Route::get('/kontak', function () { return view('frontend.kontak'); })->name('cp');
