<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CrudController;

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

//tambah
Route::get('/tambah', [CrudController::class, 'tambah'])->name('get.tambah');
Route::post('/tambah', [CrudController::class, 'proses_tambah'])->name('post.tambah');

//baca
Route::get('/baca', [CrudController::class, 'baca'])->name('get.baca');