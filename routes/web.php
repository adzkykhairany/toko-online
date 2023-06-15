<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/{id}', [ProductController::class, 'getAvailable'])->name('products.getAvailable');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('/products/available', [ProductController::class, 'getAvailable'])->name('products.getAvailable');

Route::get('/products/unavailable', [ProductController::class,'getUnavailable'])->name('products.getUnavailable');

Route::put('/products/{id}/stock', [ProductController::class, 'updateStock'])->name('products.updateStock');

?>