<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function)
// })->middleware('auth:sanctum');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/product', [ProductController::class, 'store'])->name('product');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product');