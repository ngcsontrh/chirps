<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\ChirpController;
use App\Models\Chirp;

Route::get('/', [ChirpController::class, 'index']);

Route::middleware('guest')->group(function() {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/login', [SessionsController::class, 'store'])->name('users.store');
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', [SessionsController::class, 'destroy']);
    Route::post('/', [ChirpController::class, 'store'])->name('chirps.store');
    Route::delete('/{chirp}', [ChirpController::class, 'destroy'])->name('chirps.destroy');
    Route::patch('/chirp/{chirp}', [ChirpController::class, 'update'])->name('chirps.update');
    Route::get('/chirp/{chirp}/edit', [ChirpController::class, 'edit'])->name('chirps.edit');
});
