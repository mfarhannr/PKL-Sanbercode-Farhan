<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\API\GajiAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/karyawan/profile', [KaryawanController::class, 'getKaryawanProfile']);
    Route::get('/karyawan', [KaryawanController::class, 'getKaryawanList']);
    Route::get('/karyawan/{nip}', [KaryawanController::class, 'getKaryawanDetail']);
    Route::apiResource('gaji', GajiAPIController::class);
});

