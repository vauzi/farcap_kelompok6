<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspirasiController;
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
Route::prefix('users')->group(function () {
    Route::post('/update', [AdminController::class, 'update'])->name('users.update');
    Route::get('/index', [AdminController::class, 'index'])->name('users');
});

Route::prefix('aspirasi')->group(function () {
    Route::get('/index', [AspirasiController::class, 'index'])->name('aspirasi.index');
    Route::post('/update/{id}', [AspirasiController::class, 'update'])->name('aspirasi.update');
    Route::get('/show/{id}', [AspirasiController::class, 'show'])->name('aspirasi.show');
    Route::get('/', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});
