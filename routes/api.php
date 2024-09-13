<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinarySearchTreeController;

Route::post('/bst/insert', [BinarySearchTreeController::class, 'insert'])->name('insert');
Route::get('/bst/search', [BinarySearchTreeController::class, 'search'])->name("search");