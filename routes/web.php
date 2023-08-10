<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/listindex', [App\Http\Controllers\ListController::class, 'index'])->name('listindex');
    Route::get('/addbookpage', [App\Http\Controllers\BooksController::class, 'addBookPage'])->name('addbookpage');

    Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');
    Route::get('/insertBook/{volumeID}/{readBefore}/{note?}/{rate?}', [App\Http\Controllers\BooksController::class, 'insertBook'])->name('insertBook');

    Route::get('/changeread/{id}/{value}', [App\Http\Controllers\BooksController::class, 'changeReadField'])->name('changeread');
    Route::get('/changenote/{id}/{value?}', [App\Http\Controllers\BooksController::class, 'changeNoteField'])->name('changenote');
    Route::get('/changerate/{id}/{value?}', [App\Http\Controllers\BooksController::class, 'changeRateField'])->name('changerate');

    Route::get('/contactpage', [App\Http\Controllers\ContactController::class, 'index']);
    Route::get('/profilepage', [App\Http\Controllers\ProfileController::class, 'index'])->name('profilepage');
    Route::get('/editprofilepage', [App\Http\Controllers\ProfileController::class, 'editProfilePage'])->name('editprofilepage');

    Route::post('/editprofile', [App\Http\Controllers\ProfileController::class, 'editProfile'])->name('editprofile');
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact');

});

Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('index');






