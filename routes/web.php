<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MutasiController;

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
Route::middleware('auth:api')->group(function () {
    Route::resource('barang', BarangController::class);
    Route::resource('mutasi', MutasiController::class);
    Route::get('barang/{barangId}/mutasi', [MutasiController::class, 'showMutasiBarang']);
    Route::get('user/{userId}/mutasi', [MutasiController::class, 'showMutasiUser']);
});
