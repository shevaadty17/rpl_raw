<?php

use App\Http\Controllers\BarangController;
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
Route::get('/barang', [BarangController::class, "index"]);

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
Route::post('/barang/insert', [BarangController::class, "insertBarang"]);
Route::get('/barang/edit/{id}', [BarangController::class, "editBarang"]);
Route::post('/barang/edit/{id}', [BarangController::class, "updateBarang"]);
Route::get('/barang/delete/{id}', [BarangController::class, "deleteBarang"]);

