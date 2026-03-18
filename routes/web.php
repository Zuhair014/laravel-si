<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     // return view('welcome');
//     return "Sistem Informasi - Route";
// });
route::get('/', [HomeController::class, 'index'])->name('home');
route::get('well', function() {return view('welcome');});
Route::get('/posts', [PostController::class, 'index']);
Route::resource('posts', PostController::class);
Route::get('posts/{post}/detail', [PostController::class, 'detail'])->name('posts.detail');