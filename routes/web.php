<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('categories', CategoryController::class);

// 1. Route untuk nampilin form (GET)
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

// 2. Route untuk ngirim data isian form (POST)
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');

// Route untuk menghapus data (DELETE)
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
