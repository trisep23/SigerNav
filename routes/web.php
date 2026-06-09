<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/map', function () {
    return view('pages.map');
});

Route::view('/destinations', 'pages.destinations');

Route::view('/about', 'pages.about');

Route::get('/wisatas', [WisataController::class, 'index']);
Route::get('/wisatas/{wisatum}', [WisataController::class, 'show'])->name('wisatas.show');