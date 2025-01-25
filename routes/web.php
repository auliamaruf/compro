<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/company/{id}', [GeneralController::class, 'show']);
