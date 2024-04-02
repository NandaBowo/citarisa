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

Route::get('/limbah_masuk', [LimbahController::class, 'limbahMasuk'])->name('limbah_masuk');
Route::post('/limbah_masuk', [LimbahController::class, 'limbahMasukAdd']);
Route::get('/limbah_keluar', [LimbahController::class, 'limbahKeluar'])->name('limbah_keluar');

Route::get('/home', [HomeController::class, 'index'])->name('home');

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
