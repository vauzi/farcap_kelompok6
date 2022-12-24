<?php

use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\AspirasiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('aspirasi')->group(function () {
    Route::get('/index', [AspirasiController::class, 'index'])->name('aspirasi.index');
    Route::post('/update/{id}', [AspirasiController::class, 'update'])->name('aspirasi.update');
    Route::get('/show/{id}', [AspirasiController::class, 'show'])->name('aspirasi.show');
    Route::post('/store', [AspirasiController::class, 'store'])->name('aspirasi.store');
});

Route::prefix('users')->group(function () {
    Route::post('/update', [AdminController::class, 'update'])->name('users.update');
    Route::get('/index', [AdminController::class, 'index'])->name('users');
});
