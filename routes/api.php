<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
Route::get('/user', [\App\Http\Controllers\Api\AuthController::class, 'index']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});