<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [ProductsController::class, 'index']);
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/product/{slug}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/run-storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage link created successfully!';
});

Route::get('/create-storage-link', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');

    if (!file_exists($link)) {
        symlink($target, $link);
        return 'Storage link created manually!';
    }
    return 'Storage link already exists!';
});

// return in filament create page
// Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');

