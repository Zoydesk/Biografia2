<?php

use Illuminate\Support\Facades\Route;

Route::get('/Yo', function () {
    return view('yo');
});

Route::get('/habilidades', function () {
    return view('habilidades'); 
})->name('habilidades');