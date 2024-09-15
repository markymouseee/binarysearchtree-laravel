<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BinarySearchTreeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/bst/insert', [BinarySearchTreeController::class, 'insert']);

Route::get('/bst/search', [BinarySearchTreeController::class, 'search']);
