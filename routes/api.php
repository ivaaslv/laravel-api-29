<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function)
// })->middleware('auth:sanctum');

Route::get('/product', [ProductController::class, 'index'])->name('product');