<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::resource('profiles', ProfilesController::class)->middleware('auth');
Route::resource('publications', PublicationController::class)->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::get('/login', [loginController::class, 'show'])->name('login');
    Route::post('/login/store', [loginController::class, 'store'])->name('login.store');
});

Route::get('/logout', [loginController::class, 'logOut'])->name('login.logout');
