<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinarySearchTreeController;

Route::get('/bst', function () {
    return view(view: 'insert');
})->name('bst.view');

Route::post('/bst/insert', [BinarySearchTreeController::class, 'insert'])->name('bst.insert');

Route::get('/bst/search', [BinarySearchTreeController::class, 'search'])->name('bst.search');
