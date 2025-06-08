<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/achievement', function () {
    return view('achievement');
})->name('achievement');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');