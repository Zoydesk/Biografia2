<?php

use Illuminate\Support\Facades\Route;

Route::get('/Yo', function () {
    return view('yo');
});

Route::get('/exp', function () {
    return view('experiencia'); 
})->name('exp');