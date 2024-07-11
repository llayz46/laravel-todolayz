<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
