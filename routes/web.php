<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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

//     Route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('/new', 'create')->name('create')->middleware('auth');
//         Route::post('/new', 'store')->name('store')->middleware('auth');
//         Route::get('/{post}/edit', 'edit')->name('edit')->middleware('auth');
//         Route::patch('/{post}/edit', 'update')->name('update')->middleware('auth');
//         Route::get('/{slug}-{id}', 'show')->where(['slug' => '[a-z0-9\-]+', 'id' => '[0-9]+'])->name('show');
//     });
