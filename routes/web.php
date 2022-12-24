<?php

use App\Http\Controllers\AspirasiController;
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
    return view('welcome');
});

Route::prefix('aspirasi')->name('aspirasi.')->controller(AspirasiController::class)->group(function () {
    Route::get('/', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});
