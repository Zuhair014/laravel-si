<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return "Sistem Informasi - Route";
});

Route::get('/well', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'index']);