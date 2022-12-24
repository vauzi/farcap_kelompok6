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

Route::prefix('aspirasi')->name('aspirasi.')->controller(AspirasiController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/create', 'create')->name('create');
    Route::get('/show', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
});

Route::prefix('users')->group(function () {
    Route::post('/update', [AdminController::class, 'update'])->name('users.update');
    Route::get('/index', [AdminController::class, 'index'])->name('users');
});
