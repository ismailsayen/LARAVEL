<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::resource('profiles',ProfilesController::class);
////////////////////////////////////////////////////////////////////
Route::get('/', [homeController::class, 'index'])->name('homePage');

Route::get('/login', [loginController::class, 'show'])->name('login');
Route::post('/login/store', [loginController::class, 'store'])->name('login.store');
Route::get('/logOut', [loginController::class, 'logOut'])->name('login.logOut');
