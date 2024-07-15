<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
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

Route::name('profile.')->middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'edit')->name('edit');
    Route::patch('/profile', 'update')->name('update');
    Route::post('/profile', 'updateImage')->name('updateImage');
    Route::put('/profile', 'updatePassword')->name('updatePassword');
});

Route::prefix('/list')->name('list.')->middleware('auth')->controller(ListController::class)->group(function () {
    Route::get('/', 'browse')->name('browse');
    Route::get('/new', 'new')->name('new');
    Route::post('/new', 'store')->name('store');
    Route::get('/{taskList}', 'show')->name('show');
    Route::get('/{taskList}/edit', 'edit')->name('edit');
    Route::patch('/{taskList}', 'update')->name('update');
    Route::delete('/{taskList}', 'destroy')->name('destroy');
});

Route::prefix('/list/{taskList}')->name('task.')->middleware('auth')->controller(TaskController::class)->group(function () {
    Route::post('/', 'store')->name('store');
    Route::patch('/{task}', 'updateStatus')->name('status');
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
