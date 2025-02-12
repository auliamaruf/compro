<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WaterSourceController;

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

// Water Source Routes
Route::prefix('water-sources')->group(function () {
    Route::get('/', [WaterSourceController::class, 'index'])->name('water-source.index');
    Route::get('/active', [WaterSourceController::class, 'getActive'])->name('water-source.active');
    Route::get('/type/{type}', [WaterSourceController::class, 'getByType'])->name('water-source.type');
    Route::get('/search', [WaterSourceController::class, 'search'])->name('water-source.search');
    Route::get('/{id}', [WaterSourceController::class, 'show'])->name('water-source.show');
});
