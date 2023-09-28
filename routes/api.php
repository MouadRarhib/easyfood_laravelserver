<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Authentication routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // User routes
    Route::get('/user', [UserController::class, 'getUser']);
    Route::post('/user/update', [UserController::class, 'update']);
    Route::post('/logout', [UserController::class, 'logout']);
});

// Other routes can be added as needed

