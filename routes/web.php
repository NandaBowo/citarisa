<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HydraController;
use App\Http\Controllers\LimbahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hydra', [HydraController::class, 'index'])->name('hydra');

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/hydra', [HydraController::class, 'index'])->name('hydra');

Route::get('/master_limbah', [LimbahController::class, 'masterLimbah']);
Route::post('/master_limbah', [LimbahController::class, 'masterLimbahAdd']);
Route::get('/limbah_masuk', [LimbahController::class, 'limbahMasuk'])->name('limbah_masuk');
Route::post('/limbah_masuk', [LimbahController::class, 'limbahMasukAdd']);
Route::get('/limbah_keluar', [LimbahController::class, 'limbahKeluar'])->name('limbah_keluar');
Route::post('/limbah_keluar', [LimbahController::class, 'limbahKeluarAdd']);
Route::get('/jumlah_limbah', [LimbahController::class, 'jumlahLimbah'])->name('jumlah_limbah');

Route::get('/home', [HomeController::class, 'index'])->name('home');
