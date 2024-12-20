<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\League\CreateLeagueController;
use App\Http\Controllers\League\LeagueListController;
use App\Http\Controllers\League\LeagueController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.show');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Ruta para la vista de registro
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('auth.register');

// Ruta para el manejo de la solicitud de registro
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register.post');

Route::get('/leagues',[LeagueListController::class,'show'])->name('leagues.show');

Route::get('/create-league',[CreateLeagueController::class,'show'])->name('createleagues.show');
Route::post('/create-league',[CreateLeagueController::class,'create'])->name('createleagues.create');


Route::get('/leagues/{key}',[LeagueController::class,'show'])->name('league.show');

Route::post('/leagues/{key}/{user}',[LeagueController::class,'inscription'])->name('inscription');
