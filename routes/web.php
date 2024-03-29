<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

Route::get('/', [BookController::class, 'index']);
Route::resource('books', BookController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
