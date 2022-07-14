<?php

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// user
