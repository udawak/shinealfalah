<?php

use App\Http\Controllers\PendidikController;
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
});

Route::get('/pendidik', [PendidikController::class, 'index'])->name('pendidik');
Route::get('/pendidik/details', [PendidikController::class, 'details']);

Route::get('/legalitas', function () {
    return view('frontend.profil.legalitas_yayasan');
});

Route::get('/keuangan', function () {
    return view('frontend.profil.pengolahan_keuangan');
});

Route::get('/kontak', function () {
    return view('frontend.kontak');
});
