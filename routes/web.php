<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/listindex', [App\Http\Controllers\ListController::class, 'index'])->name('listindex');
    Route::get('/addbookpage', [App\Http\Controllers\BooksController::class, 'addBookPage'])->name('addbookpage');
    Route::get('/addauthorpage', [App\Http\Controllers\BooksController::class, 'addAuthorPage'])->name('addauthorpage');
    Route::get('/contactpage', [App\Http\Controllers\ContactController::class, 'index'])->name('contactpage');
    Route::get('/editbookpage/{id}', [App\Http\Controllers\BooksController::class, 'editBookPage'])->name('editbookpage');
    Route::get('/bookdetail/{id}', [App\Http\Controllers\BooksController::class, 'bookDetail'])->name('bookdetail');
    Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');


    Route::get('/insertWillReadBook/{volumeID}', [App\Http\Controllers\BooksController::class, 'insertWillReadBook'])->name('insertWillReadBook');
    Route::get('/insertAlreadyReadBook/{volumeID}', [App\Http\Controllers\BooksController::class, 'insertAlreadyReadBook'])->name('insertAlreadyReadBook');
    Route::post('/editbook', [App\Http\Controllers\BooksController::class, 'editBook'])->name('editbook');
    Route::post('/addauthor', [App\Http\Controllers\BooksController::class, 'addAuthor'])->name('addauthor');
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact');
});

Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('index');






