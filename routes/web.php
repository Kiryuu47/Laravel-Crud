<?php

// panggil controller Siswa
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembelianController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route Siswa
Route::resource('siswa', SiswaController::class);

// route Pembelian
Route::resource('pembelian', PembelianController::class);

// Route Test Template
Route::get('tes-template', function () {
    return view('layouts.admin');
});
