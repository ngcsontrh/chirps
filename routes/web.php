<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\RegisterUserController;

Route::get('/', function () {
    return view('index');
});

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store'])->name('users.store');
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
});
