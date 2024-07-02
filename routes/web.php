<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/', function () {
    return redirect()->to('books.index');
});

Route::resource('books', BookController::class);
