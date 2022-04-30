<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::redirect('/', 'home');

Route::get('appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('appointment/{name?}', [AppointmentController::class, 'show'])->name('appointment.show');




Route::get('home', [NewsController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');

    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('account', [AccountController::class, 'index'])->name('account');
    Route::get('account/{id}', [AccountController::class, 'show'])->name('account.show');
});
