<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\language\LanguageController;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('home');

Route::middleware(['web', 'auth'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

  // locale
  Route::get('/lang/{locale}', [LanguageController::class, 'swap']);
  Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
});

// authentication
Route::get('/auth/login', [LoginBasic::class, 'index'])->name('login');
// Route::get('/auth/register', [RegisterBasic::class, 'index'])->name('register');

Route::post('/message', [MessageController::class, 'create'])->name('message.create');
