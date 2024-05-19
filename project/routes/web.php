<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Route;

Route::name('profiles.')->prefix('profiles')->group(function () {
    Route::controller(ProfilesController::class)->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        ////////////////////////////////////////////////////////////////////
        Route::get('/{profile}', 'show')->where('id', '\d+')->name('show');
        Route::post('/store', 'store')->name('store');
        ////////////////////////////////////////////////////////////////////
        Route::delete('/{profile}', 'destroy')->name('destroy');
        ////////////////////////////////////////////////////////////////////
        Route::get('/{profile}/edit', 'afficher')->name('afficher');
        Route::put('/{profile}', 'edit')->name('edit');
    });
});
////////////////////////////////////////////////////////////////////
Route::get('/', [homeController::class, 'index'])->name('homePage');

Route::get('/login', [loginController::class, 'show'])->name('login');
Route::post('/login/store', [loginController::class, 'store'])->name('login.store');
Route::get('/logOut', [loginController::class, 'logOut'])->name('login.logOut');
