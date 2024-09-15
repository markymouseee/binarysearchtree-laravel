<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'insert');
})->name('bst.view');
