<?php

use App\Http\Controllers\CategoryController;
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
Route::post('/profile/name/update', [App\Http\Controllers\ProfileController::class,'name_update'])->name("profile.name.update");
Route::post('/profile/email/update', [App\Http\Controllers\ProfileController::class,'email_update'])->name("profile.email.update");
Route::post('/profile/password/update', [App\Http\Controllers\ProfileController::class,'password_update'])->name("profile.password.update");
Route::post('/profile/image/update', [App\Http\Controllers\ProfileController::class,'image_update'])->name("profile.image.update");

//category
Route::get('/category',[CategoryController::class,'index'])->name('category.index');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{rifat}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/update/{slug}',[CategoryController::class,'update'])->name('category.update');
Route::get('/category/delete/{slug}',[CategoryController::class,'delete'])->name('category.delete');
Route::post('/category/status/{slug}',[CategoryController::class,'status'])->name('category.status');

