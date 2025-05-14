<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('books.index');
// });

// bagian sidebar
Route::get('login',[BooksController::class,'index'])->name('login');
Route::get('/',[BooksController::class,'index']);
// Route::get('books/show',[BooksController::class,'show'])->name('books.show');
Route::get('index/books',[BooksController::class,'index'])->name('books.index');

// bagian utama
Route::get('create',[BooksController::class,'create'])->name('books.create');
Route::post('/create/books',[BooksController::class,'store'])->name('store.books');
Route::get( '/books/{id}', action: [BooksController::class, 'show'])->name('books.show');
Route::delete('/delete/{book}',[BooksController::class,'destroy'])->name('books.destroy');
// Route::get(P)
