<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('emails.registrationMail');
});

Route::middleware(['auth'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');
        Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'showChangePasswordForm'])->name('change-password');
        Route::POST('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password-post');
        Route::get('/my-statement', [App\Http\Controllers\HomeController::class, 'bankStatement'])->name('my-bank-statement');
        Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
        
    });
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/add-user', [App\Http\Controllers\HomeController::class, 'addUser'])->name('add-user');
        Route::get('/get-users', [App\Http\Controllers\HomeController::class, 'admin'])->name('get-users');

    });

Auth::routes();