<?php

use App\Http\Controllers\Api\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/wisatas', [WisataController::class, 'index']);
Route::get('/wisatas/{wisatum}', [WisataController::class, 'show']);