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
    return view('homeAdmin');
});
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});
Route::get('/barang', function () {
    return view('barang');
});
Route::get('/kasir', function () {
    return view('kasir');
});
Route::get('/barang/create', function () {
    return view('tambahBarang');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profile/edit', function () {
    return view('editProfile');
});
