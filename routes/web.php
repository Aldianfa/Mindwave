<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\SelfdiaryController;
use App\Http\Controllers\LiterasiController;


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

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/login', function () {
    return view('login');
})->name('login');




Route::post('/pengguna/store',[PenggunaController::class, 'store'])->name('pengguna.store');
Route::post('/pengguna/login',[PenggunaController::class, 'login'])->name('pengguna.login');
Route::get('/pengguna/logout',[PenggunaController::class, 'logout'])->name('pengguna.logout');

// Halaman Selfdiary
// user harus login terlebih dahulu untuk mengakses halaman ini
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/selfdiary',[SelfdiaryController::class, 'index'])->name('selfdiary.index');
    Route::get('/selfdiary/dashboard',[SelfdiaryController::class, 'dashboard'])->name('selfdiary.dashboard');
    Route::get('/selfdiary/create',[SelfdiaryController::class, 'create'])->name('selfdiary.create');
    Route::post('/selfdiary/store',[SelfdiaryController::class, 'store'])->name('selfdiary.store');
    Route::get('/selfdiary/detail/{id_diary}',[SelfdiaryController::class, 'detail'])->name('selfdiary.detail');
    // HALAMAN LITERASI ISLAM
    Route::get('/literasi',[LiterasiController::class, 'index'])->name('literasi.index');
    // HALAMAN BILIK CERITA
    Route::get('/bilikcerita',[LiterasiController::class, 'bilikcerita'])->name('bilikcerita.index');
    
});
