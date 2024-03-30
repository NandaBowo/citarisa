<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HydraController;
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
<<<<<<< HEAD

Route::get('/hydra', [HydraController::class, 'index'])->name('hydra');

Route::get('/login', [AuthController::class, 'getLogin']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);
=======
Route::get('/hydra', [App\Http\Controllers\HydraController::class, 'index'])->name('hydra');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 6a7960130338b9862df9e3dfdf2569663ce19a10
