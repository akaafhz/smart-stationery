<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade; // <-- [KOREKSI 1] Ini wajib ditambahkan!
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

// [KOREKSI 2] Cukup 1 baris ini saja, sudah mencakup create, store, delete, dll!
Route::resource('categories', CategoryController::class);


// Route untuk pengujian halaman Livewire LKPD
Route::get('/intro', function () {
    return Blade::render('
        <!DOCTYPE html>
        <html>
        <head>
            <title>Livewire Intro</title>
            @livewireStyles
            @vite([\'resources/css/app.css\', \'resources/js/app.js\'])
        </head>
        <body>
            <livewire:introduction />
            @livewireScripts
        </body>
        </html>
    ');
});

Route::get('/student', function () {
    return Blade::render('
        <!DOCTYPE html>
        <html>
        <head>
            <title>Student Form</title>
            @livewireStyles
            @vite([\'resources/css/app.css\', \'resources/js/app.js\'])
        </head>
        <body>
            <livewire:student-form />
            @livewireScripts
        </body>
        </html>
    ');
});

Route::get('/category-preview', function () {
    return Blade::render('
        <!DOCTYPE html>
        <html>
        <head>
            <title>Category Preview</title>
            @livewireStyles
            @vite([\'resources/css/app.css\', \'resources/js/app.js\'])
        </head>
        <body class="bg-gray-200 p-8">
            <livewire:category-preview />
            @livewireScripts
        </body>
        </html>
    ');
});
