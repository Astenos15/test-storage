<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomepageController::class, 'index']);
Route::get('/home/edit', [HomepageController::class, 'edit']);
Route::put('/home', [HomepageController::class, 'update'])->name('home.upload');
