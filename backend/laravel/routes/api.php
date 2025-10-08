<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionAuthController;

Route::get('/', function () {
    return response()->json([
        'status' => 'ok',
        'time' => now()->toIso8601String(),
        'endpoints' => [
            'categories' => route('categories.index'),
            'products' => route('products.index'),
        ],
    ]);
});

Route::post('/login', [LoginController::class, 'store'])->middleware('throttle:10,1');
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [LoginController::class, 'show']);
    Route::post('/logout', [LoginController::class, 'destroy']);
});

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);