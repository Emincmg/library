<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/list', [App\Http\Controllers\ListController::class, 'index'])->name('list.index');

    Route::group(['book'], function () {
        Route::controller(\App\Http\Controllers\BooksController::class)->group(function () {
            Route::prefix('change')->group(function () {
                Route::get('read/{id}/{value}', 'changeReadField')->name('changeread');
                Route::get('note/{id}/{value?}', 'changeNoteField')->name('changenote');
                Route::get('rate/{id}/{value?}', 'changeRateField')->name('changerate');
            });
            Route::get('/checkbook/{volumeID}', 'checkBookExists')->name('checkbook');
            Route::get('/addbookpage', 'addBookPage')->name('addbookpage');
            Route::post('/store', 'store')->name('store');
            Route::get('/deletebook/{id}', 'deleteBook')->name('deletebook');
        }
        );
    });

    Route::group(['profile'], function () {
        Route::controller(App\Http\Controllers\ProfileController::class)->group(function () {
            Route::get('/profilepage', 'index')->name('profilepage');
            Route::get('/editprofilepage', 'editProfilePage')->name('editprofilepage');
            Route::put('/editprofile', 'editProfile')->name('editprofile');
        });
    });

    Route::group(['contact'], function () {
        Route::controller(App\Http\Controllers\ContactController::class)->group(function () {
            Route::prefix('contact')->group(function () {
                Route::post('/contact', 'store')->name('contact');
                Route::get('/contactpage', 'index');
            });
        });
    });
});

Route::group(['google'], function () {
    Route::controller(App\Http\Controllers\GoogleController::class)->group(function () {
        Route::get('auth/google', 'signInwithGoogle');
        Route::get('callback/google', 'callbackToGoogle')->name('callbackToGoogle');
    });
});





