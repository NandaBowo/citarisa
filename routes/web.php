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

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'survey']);
Route::get('/survey', [HomeController::class, 'dataSurvey']);
Route::get('/survey/delete/{id}', function () {
    return redirect('/survey');
});
Route::delete('/survey/delete/{id}', [HomeController::class, 'deleteSurvey']);

Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sadmin,user')->group(function () {
    // Rute-rute yang memerlukan autentikasi
    Route::get('/apar', [App\Http\Controllers\AparController::class, 'index'])->name('apar');
    Route::get('/detector', [App\Http\Controllers\DetectorController::class, 'index'])->name('detector');
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
    Route::get('/hydra', [HydraController::class, 'index'])->name('hydra');

    Route::get('/detector/export', [App\Http\Controllers\DetectorController::class, 'export']);
    Route::get('/hydra/export', [HydraController::class, 'export']);
    Route::get('/apar/export', [App\Http\Controllers\AparController::class, 'export']);
    // Route Master
    Route::get('/master_limbah', [LimbahController::class, 'masterLimbah']);
    Route::post('/master_limbah', [LimbahController::class, 'masterLimbahAdd']);
    Route::get('/master_limbah/edit/{id}', function () {
        return redirect('/master_limbah');
    });
    Route::put('/master_limbah/edit/{id}', [LimbahController::class, 'masterLimbahUpdate']);
    Route::delete('/master_limbah/delete/{id}', [LimbahController::class, 'masterLimbahDelete']);

    // Route Limbah Masuk
    Route::get('/limbah_masuk', [LimbahController::class, 'limbahMasuk'])->name('limbah_masuk');
    Route::post('/limbah_masuk', [LimbahController::class, 'limbahMasukAdd']);
    Route::get('/limbah_masuk/edit/{id}', function () {
        return redirect('/limbah_masuk');
    });
    Route::put('/limbah_masuk/edit/{id}', [LimbahController::class, 'limbahMasukUpdate']);
    Route::get('/limbah_masuk/delete/{id}', function () {
        return redirect('/limbah_masuk');
    });
    Route::delete('/limbah_masuk/delete/{id}', [LimbahController::class, 'limbahMasukDelete']);

    // Route Limbah Keluar
    Route::get('/limbah_keluar', [LimbahController::class, 'limbahKeluar'])->name('limbah_keluar');
    Route::post('/limbah_keluar', [LimbahController::class, 'limbahKeluarAdd']);
    Route::get('/limbah_keluar/edit/{id}', function () {
        return redirect('/limbah_keluar');
    });
    Route::put('/limbah_keluar/edit/{id}', [LimbahController::class, 'limbahKeluarUpdate']);
    Route::get('/limbah_keluar/delete/{id}', function () {
        return redirect('/limbah_keluar');
    });
    Route::delete('/limbah_keluar/delete/{id}', [LimbahController::class, 'limbahKeluarDelete']);

    // Route Jumlah Limbah
    Route::get('/jumlah_limbah', [LimbahController::class, 'jumlahLimbah'])->name('jumlah_limbah');

    Route::get('/limbah_masuk/export', [LimbahController::class, 'exportMasuk']);
    Route::get('/limbah_jumlah/export', [LimbahController::class, 'exportJumlah']);
    Route::get('/limbah_keluar/export', [LimbahController::class, 'exportKeluar']);
});




