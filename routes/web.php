<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
})->name('home');

Route::get("/registrasi",[AuthController::class, 'registrasi']);
Route::post("/register",[AuthController::class, 'register'])->name('store');
Route::get("/login",[AuthController::class, 'Log'])->middleware(['guest'])->name('login');
Route::post("/login",[AuthController::class, 'Login'])->middleware(['guest'])->name('login');
Route::get("/logout",[AuthController::class, 'Logout'])->middleware(['auth'])->name('home');