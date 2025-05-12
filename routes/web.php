<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::post('/message', [MessageController::class, 'create'])->name('message.create');
