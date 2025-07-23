<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('inventory', [ProductController::class, 'index'])->name('inventory');
    Route::get('inventory/create', [ProductController::class, 'create'])->name('inventory.create');
    Route::get('inventory/test', function () {
        return Product::with(['supplier','category'])->get();
    });

});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
