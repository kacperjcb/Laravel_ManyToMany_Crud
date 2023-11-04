<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

// Trasy dla modelu Author
Route::resource('authors', AuthorController::class);

// Trasy dla modelu Book
Route::resource('books', BookController::class);

