<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('home');
Route::get('/addbookpage', [App\Http\Controllers\BooksController::class, 'addBookPage'])->name('addbookpage');
Route::get('/addauthorpage', [App\Http\Controllers\BooksController::class, 'addAuthorPage'])->name('addauthorpage');
Route::get('/contactpage', [App\Http\Controllers\ContactController::class, 'index'])->name('contactpage');
Route::get('/editbookpage/{id}', [App\Http\Controllers\BooksController::class, 'editBookPage'])->name('editbookpage');
Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');


Route::post('/addbook', [App\Http\Controllers\BooksController::class, 'addBook'])->name('addbook');
Route::post('/editbook', [App\Http\Controllers\BooksController::class, 'editBook'])->name('editbook');
Route::post('/addauthor', [App\Http\Controllers\BooksController::class, 'addAuthor'])->name('addauthor');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact');



