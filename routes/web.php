<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/listindex', [App\Http\Controllers\ListController::class, 'index'])->name('listindex');

    Route::get('/insertBook/{volumeID}/{readBefore}/{note?}/{rate?}', [App\Http\Controllers\BooksController::class, 'insertBook'])->name('insertBook');
    Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');


    Route::get('/changeread/{id}/{value}', [App\Http\Controllers\BooksController::class, 'changeReadField'])->name('changeread');
    Route::get('/changenote/{id}/{value?}', [App\Http\Controllers\BooksController::class, 'changeNoteField'])->name('changenote');
    Route::get('/changerate/{id}/{value?}', [App\Http\Controllers\BooksController::class, 'changeRateField'])->name('changerate');
    Route::get('/checkbook/{volumeID}', [App\Http\Controllers\BooksController::class, 'checkBookExists'])->name('checkbook');

    Route::get('/addbookpage', [App\Http\Controllers\BooksController::class, 'addBookPage'])->name('addbookpage');
    Route::get('/contactpage', [App\Http\Controllers\ContactController::class, 'index']);
    Route::get('/profilepage', [App\Http\Controllers\ProfileController::class, 'index'])->name('profilepage');
    Route::get('/editprofilepage', [App\Http\Controllers\ProfileController::class, 'editProfilePage'])->name('editprofilepage');

    Route::post('/editprofile', [App\Http\Controllers\ProfileController::class, 'editProfile'])->name('editprofile');
    Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact');

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'signInwithGoogle']);
Route::get('callback/google', [App\Http\Controllers\GoogleController::class, 'callbackToGoogle']);





