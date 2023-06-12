<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('home');
Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');


Route::post('/addbook', [App\Http\Controllers\BooksController::class, 'addBook'])->name('addbook');
Route::post('/editbook', [App\Http\Controllers\BooksController::class, 'editBook'])->name('editbook');



