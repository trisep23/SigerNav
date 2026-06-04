<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/map', function () {
    return view('pages.map');
});

Route::view('/destinations', 'pages.destinations');

Route::view('/about', 'pages.about');