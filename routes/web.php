<?php

use Illuminate\Support\Facades\Route;
use TijsVerkoyen\CssToInlineStyles\Css\Rule\Rule;
use App\Http\Livewire\UserDashboardLivewire;
use App\Http\Livewire\UserPaymentLivewire;

Route::get('/dashboard',UserDashboardLivewire::class);
Route::get('/payments',UserPaymentLivewire::class);


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
