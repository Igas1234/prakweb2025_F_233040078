<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about',['nama'=> 'Muhammad Fabregas']);
});



Route::get('/categories', [CategoryController::class, 'index']);

