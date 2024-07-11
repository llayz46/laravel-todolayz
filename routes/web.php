<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])
    ->name('auth.login')
    ->middleware('guest');
Route::post('/login', [AuthController::class, 'doLogin'])
    ->middleware('guest');
Route::delete('/logout', [AuthController::class, 'logout'])
    ->name('auth.logout')
    ->middleware('auth');

Route::get('/register', [AuthController::class, 'register'])
    ->name('auth.register')
    ->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])
    ->middleware('guest');
