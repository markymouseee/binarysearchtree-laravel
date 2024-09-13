<?php

use App\Http\Controllers\BinarySearchTreeController;
use Illuminate\Support\Facades\Route;

Route::post('/bst/insert', [BinarySearchTreeController::class, 'insert'])->name('insert');
Route::get('/bst/search', [BinarySearchTreeController::class, 'search'])->name("search");