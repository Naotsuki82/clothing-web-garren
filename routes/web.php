<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/hydrocarbon', [HomeController::class, 'hydrocarbon'])->name('hydrocarbon');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
