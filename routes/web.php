<?php

use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\Frontend\AspirasisController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::prefix('aspirasi')->name('aspirasi.')->controller(AspirasisController::class)->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/create', 'create')->name('create');
    Route::get('/show', 'show')->name('show');
    Route::post('/store', 'store')->name('store');
});
