<?php

use App\Http\Controllers\Api\MovementController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/record-movement/{id?}', [MovementController::class, 'index'])->middleware(['auth:sanctum']);
