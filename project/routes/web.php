<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index'])->name('homePage');
Route::get('/profiles',[ProfilesController::class,'index'])->name('profiles.index');
Route::get('/profiles/{profile}',[ProfilesController::class,'show'])->where('id','\d+')->name('profiles.show');
Route::get('/profiles/create', [ProfilesController::class,'create'])->name('profiles.create');
Route::post('/profiles/store', [ProfilesController::class,'store'])->name('profiles.store');
