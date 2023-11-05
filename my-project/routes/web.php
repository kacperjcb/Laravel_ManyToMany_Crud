<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/', [HomeController::class, 'index'])->name('home');
// Trasy dla modelu Author
Route::resource('authors', AuthorController::class);

// Trasy dla modelu Book
Route::resource('books', BookController::class);

