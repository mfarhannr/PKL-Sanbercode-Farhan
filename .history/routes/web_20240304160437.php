<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\KeluargaKaryawanController;
use App\Http\Controllers\SertifikasiKeahlianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

Route::group(
    ['middleware' => 'auth'],
    function () {
        Route::resource('pendidikan', PendidikanController::class);
        Route::resource('pengalaman', PengalamanController::class);
        Route::resource('pelatihan', PelatihanController::class);
        Route::resource('sertifikasi-keahlian', SertifikasiKeahlianController::class);
        Route::resource('keluarga-karyawan', KeluargaKaryawanController::class);
        Route::get('/karyawan/show', [karyawanKaryawanController::class, 'show'])->name('karyawan.show');

        Route::middleware(['auth', 'cekRole:admin'])->group(function () {
            Route::resource('accounts', UserController::class);
            Route::resource('karyawan', KaryawanController::class);
            Route::resource('gaji', GajiController::class);
        });
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    }
);
