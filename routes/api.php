<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\KategoriController;
use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function)
// })->middleware('auth:sanctum');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product.show');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{kategori}', [KategoriController::class, 'show'])->name('kategori.show');
Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.delete');

// Route::prefix('auth')->name('auth.')->group(function () {
//     Route::post('register', [AuthController::class, 'register'])->name('register');
//     Route::post('login', [AuthController::class, 'login'])->name('login');

//     // 'jwt' ini sebagai satpam, harus masukin token dulu baru bisa logout dan get profile
//     Route::middleware('jwt')->group(function() {
//         Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//         Route::get('profile', [AuthController::class, 'profile'])->name('profile');
//     });
// });
//     // 'jwt' ini juga sama, harus masukin token dulu
// Route::middleware('jwt')->group(function () {
//     Route::apiResource('product', ProductController::class);
// });