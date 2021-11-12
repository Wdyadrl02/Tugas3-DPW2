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
    return view('welcome');
});


Route::get('beranda', function () {
    return view('dashboard');
});

Route::get('home', function () {
    return view('home');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('pengiriman', function () {
    return view('pengiriman');
});

Route::get('login', function () {
    return view('login');
});

Route::get('halaman1', function () {
    return view('halamanKategori');
});

Route::get('halaman2', function () {
    return view('halproduk');
});

Route::get('halaman3', function () {
    return view('haluser');
});

