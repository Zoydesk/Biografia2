<?php

use Illuminate\Support\Facades\Route;

Route::get('/Yo', function () {
    return view('yo');
});

Route::get('/exp', function () {
    return view('experiencia'); 
})->name('exp');

Route::get('/habilidades', function () {
    return view('habilidades'); 
})->name('habilidades');


Route::get('/academia', function () {
    return view('academia'); 
})->name('academia');

