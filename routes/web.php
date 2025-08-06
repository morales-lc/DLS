<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ResourceController;




Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/resource/view', [ResourceController::class, 'show'])->name('resource.view');