<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     // return view('welcome');
//     return "Sistem Informasi - Route";
// });
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth
Auth::routes([
    'verify' => true,
    'register' => false
]);

// Post
Route::resource('posts', PostController::class);
Route::get('posts/{post}/detail', [PostController::class, 'detail'])->name('posts.detail');

// Admin
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('proteksi-1', [HomeController::class, 'proteksi1'])->name('admin.proteksi.1');
});
// Route::get('proteksi-1', [App\Http\Controllers\HomeController::class, 'proteksi1'])->middleware('auth');