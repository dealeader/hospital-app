<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('layouts.base');
// });
Route::redirect('/', 'home');
//Route::view('/', 'home.index')->name('home');
 Route::view('appointment', 'appointment.index')->name('appointment');
// Route::view('login', 'login.index')->name('login');
// Route::view('register', 'register.index')->name('register');


Route::get('home', [NewsController::class, 'index'])->name('home');
//Route::resource('home', NewsController::class)->;

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
