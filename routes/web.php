<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaleHistoryController;


Route::get('/', function () {
    return view('products.index');
});


// Products Route
Route::get('/products', [ProductController::class,'index'])->name('products');
// create Product Route
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');

Route::post('/products', [ProductController::class,'store'])->name('product.store');

// delete product
Route::delete('/products/{id}',[ProductController::class,'destroy'])->name('product.destroy');

// sell route
Route::get('/products/{id}/sell',[ProductController::class,'sell'])->name('products.sell');
Route::put('/products/{id}/qty-update', [ProductController::class,'updateQuantity'])->name('products.update-qty');

// update product
Route::get('/products/{id}/edit', [ProductController::class,'edit'])->name('products.edit');

Route::put('/products/{id}/update', [ProductController::class,'update'])->name('products.update');


// Dashboard Route
Route::get('/dashboard', [DashboardController::class,'dashboard'])->name('dashboard.index');

// Sale History
Route::get('/sale-history', [SaleHistoryController::class,'index'])->name('sales.index');
