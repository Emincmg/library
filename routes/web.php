<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', [App\Http\Controllers\BooksController::class, 'index'])->name('home');
Route::get('/deletebook/{id}', [App\Http\Controllers\BooksController::class, 'deleteBook'])->name('deletebook');
Route::get('/getdetailbook/{id}', [App\Http\Controllers\BooksController::class, 'getDetailBook'])->name('getdetailbook');

Route::post('/addbook', [App\Http\Controllers\BooksController::class, 'addBook'])->name('addbook');
Route::post('/editbook', [App\Http\Controllers\BooksController::class, 'editBook'])->name('editbook');



