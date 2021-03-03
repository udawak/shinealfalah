<?php

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

Route::get('/pendidik', function () {
    return view('frontend.profil.pendidik');
});

Route::get('/pendidik/details', function () {
    return view('frontend.profil.pendidik_details');
});

Route::get('/legalitas', function () {
    return view('frontend.profil.legalitas_yayasan');
});

Route::get('/keuangan', function () {
    return view('frontend.profil.pengolahan_keuangan');
});

Route::get('/kontak', function () {
    return view('frontend.kontak');
});
