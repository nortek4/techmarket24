<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);