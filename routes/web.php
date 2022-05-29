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
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'index'])->name('login');


    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware('auth')->group(function () {

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('account', [AccountController::class, 'index'])->name('account');

});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::group([], function () {
        Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'index'])->name('admin');
    });

    Route::group(['prefix' => 'users'], function () {
       Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
       Route::get('/create', [\App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
       Route::post('/', [\App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
       Route::get('/{user}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin.users.show');
       Route::get('/{user}/edit', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
       Route::patch('/{user}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
       Route::delete('/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin.categories.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    });

    Route::group(['prefix' => 'times'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\TimeController::class, 'index'])->name('admin.times.index');
        Route::get('/create', [\App\Http\Controllers\Admin\TimeController::class, 'create'])->name('admin.times.create');
        Route::post('/', [\App\Http\Controllers\Admin\TimeController::class, 'store'])->name('admin.times.store');
        Route::get('/{time}', [\App\Http\Controllers\Admin\TimeController::class, 'show'])->name('admin.times.show');
        Route::get('/{time}/edit', [\App\Http\Controllers\Admin\TimeController::class, 'edit'])->name('admin.times.edit');
        Route::patch('/{time}', [\App\Http\Controllers\Admin\TimeController::class, 'update'])->name('admin.times.update');
        Route::delete('/{time}', [\App\Http\Controllers\Admin\TimeController::class, 'destroy'])->name('admin.times.destroy');
    });

    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\NewsPostController::class, 'index'])->name('admin.newsposts.index');
        Route::get('/create', [\App\Http\Controllers\Admin\NewsPostController::class, 'create'])->name('admin.newsposts.create');
        Route::post('/', [\App\Http\Controllers\Admin\NewsPostController::class, 'store'])->name('admin.newsposts.store');
        Route::get('/{post}', [\App\Http\Controllers\Admin\NewsPostController::class, 'show'])->name('admin.newsposts.show');
        Route::get('/{post}/edit', [\App\Http\Controllers\Admin\NewsPostController::class, 'edit'])->name('admin.newsposts.edit');
        Route::patch('/{post}', [\App\Http\Controllers\Admin\NewsPostController::class, 'update'])->name('admin.newsposts.update');
        Route::delete('/{post}', [\App\Http\Controllers\Admin\NewsPostController::class, 'destroy'])->name('admin.newsposts.destroy');
    });


});
