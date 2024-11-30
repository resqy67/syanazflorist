<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', [ProductsController::class, 'index']);
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/product/{slug}', [ProductsController::class, 'show'])->name('products.show');

// return in filament create page
// Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

