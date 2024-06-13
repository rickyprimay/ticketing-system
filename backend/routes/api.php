<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;

Route::post('/register', [RegisterController::class, '__invoke'])->name('register');
Route::post('/login', [LoginController::class, '__invoke'])->name('login');
Route::post('/logout', [LogoutController::class, '__invoke'])->name('logout');

Route::middleware(['auth:api', 'checkUserRole:2'])->group(function () {
    Route::get('users', [UserController::class, 'index']);
    Route::post('users', [UserController::class, 'store']);
    Route::get('users/{id}', [UserController::class, 'show']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'destroy']);
});

Route::middleware(['auth:api', 'checkUserRole:1'])->group(function () {
    
});
