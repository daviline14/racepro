<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('auth.register');
Route::post('login', [LoginController::class, 'login']);
Route::post('register', [LoginController::class, 'register']);
Route::post('logout', [LoginController::class, 'logout'])->name('auth.logout');
