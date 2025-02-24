<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WaterSourceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TarifController;
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Company Routes
Route::prefix('company')->group(function () {
    Route::get('/', [GeneralController::class, 'index'])->name('company.index');
    Route::get('/{id}', [GeneralController::class, 'show'])->name('company.show');
});

// Blog/Posts Routes
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('posts.show');
});

// Contact Routes
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('contact.send-email');
// Tarif Routes
Route::get('/biaya-tetap', [TarifController::class, 'biayaTetap'])->name('tarif.biaya-tetap');
Route::get('/tarif/biaya-tetap', [TarifController::class, 'biayaTetap'])->name('tarif.biaya-tetap');
Route::get('/tarif-dasar', function () {
    return view('components.tarif.tarif-dasar');
})->name('tarif.dasar');
// Water Source Routes
Route::prefix('water-sources')->group(function () {
    Route::get('/', [WaterSourceController::class, 'index'])->name('water-source.index');
    Route::get('/active', [WaterSourceController::class, 'getActive'])->name('water-source.active');
    Route::get('/type/{type}', [WaterSourceController::class, 'getByType'])->name('water-source.type');
    Route::get('/search', [WaterSourceController::class, 'search'])->name('water-source.search');
    Route::get('/{id}', [WaterSourceController::class, 'show'])->name('water-source.show');
});
