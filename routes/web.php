<?php

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
Route::get('/hydra', [App\Http\Controllers\HydraController::class, 'index'])->name('hydra');
Route::get('/apar', [App\Http\Controllers\AparController::class, 'index'])->name('apar');
Route::get('/detector', [App\Http\Controllers\DetectorController::class, 'index'])->name('detector');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
