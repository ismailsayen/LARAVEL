<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('homePage');
Route::get('/profiles',[ProfilesController::class,'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfilesController::class,'create'])->name('profiles.create');
Route::get('/profiles/{profile}',[ProfilesController::class,'show'])->where('id','\d+')->name('profiles.show');
Route::post('/profiles/store', [ProfilesController::class,'store'])->name('profiles.store');
Route::get('/login', [loginController::class,'show'])->name('login');
Route::post('/login/store', [loginController::class,'store'])->name('login.store');
Route::get('/logOut', [loginController::class,'logOut'])->name('login.logOut');

