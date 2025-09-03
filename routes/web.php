<?php

use Illuminate\Support\Facades\Route;

Route::get('/Yo', function () {
    return view('yo');
});

Route::get('/academia', function () {
    return view('academia'); 
})->name('academia');