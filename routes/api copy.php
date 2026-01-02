<?php

use App\Http\Controllers\Admin\Api\CategoryController;
use App\Http\Controllers\Admin\Api\ProductController;
use App\Http\Controllers\Admin\Api\AuthController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::post('login', [AuthController::class, 'login'])->name('api.login');

// Protected Admin API Routes
Route::prefix('admin')->middleware('auth:api')->group(function () {
    // Categories API Routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('api.admin.categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('api.admin.categories.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('api.admin.categories.show');
    Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('api.admin.categories.update');
    Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('api.admin.categories.update');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('api.admin.categories.destroy');
    
    // Products API Routes
    Route::get('/products', [ProductController::class, 'index'])->name('api.admin.products.index');
    Route::post('/products', [ProductController::class, 'store'])->name('api.admin.products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('api.admin.products.show');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('api.admin.products.update');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('api.admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('api.admin.products.destroy');
});

