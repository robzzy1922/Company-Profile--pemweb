<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('contact');
})->name('contact');