<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/company/{id}', [GeneralController::class, 'show']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show']);

Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail']);

Route::get('/biaya-tetap', function () {
    return view('biaya-tetap');
});

Route::get('/tarif-dasar', function () {
    return view('tarif-dasar');
});
