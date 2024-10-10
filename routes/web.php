<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/',[FrontendController ::class,'index'])->name('root');




//dashboard-routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

//profile
Route::get('/profile', [App\Http\Controllers\ProfileController::class,'index'])->name("profile");
