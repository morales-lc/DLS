



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ProfileController;




Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/resource/view', [ResourceController::class, 'show'])->name('resource.view');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::view('/saved', 'saved')->name('saved');
Route::view('/history', 'history')->name('history');
Route::view('/settings', 'settings')->name('settings');
Route::view('/mides', 'mides')->name('mides');
Route::view('/about', 'about')->name('about');
Route::view('/chart', 'chart')->name('chart');
Route::view('/', 'login')->name('login');