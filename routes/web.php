<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/shop', [HomeController::class,'shop'])->name('shop');
Route::get('/shopDetails', [HomeController::class,'shopDetails'])->name('shopDetails');

Auth::routes();
