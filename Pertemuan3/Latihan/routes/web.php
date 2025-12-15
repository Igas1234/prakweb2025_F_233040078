<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});




Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/categories', [CategoryController::class, 'index']);

// Route untuk dashboard posts - hanya untuk yang sudah login

// Index - Menampilkan semua posts milik user
Route::get('/dashboard', [DashboardPostController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.index');

// Create - Form untuk membuat post baru
Route::get('/dashboard/create', [DashboardPostController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.create');

// Store - Menyimpan post baru
Route::post('/dashboard', [DashboardPostController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.store');

// Show - Menampilkan detail post berdasarkan slug
Route::get('/dashboard/{post:slug}', [DashboardPostController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.show');
