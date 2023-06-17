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

Route::get('', [ProductController::class, 'index'])->name('products.index');

Route::get('/create', [ProductController::class, 'create'])->name('products.create');

Route::post('', [ProductController::class, 'store'])->name('products.store');

Route::get('/{id}/show', [ProductController::class, 'show'])->name('products.show');

Route::get('{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::get('/available', [ProductController::class, 'available'])->name('products.available');

Route::get('/unavailable', [ProductController::class,'unavailable'])->name('products.unavailable');

Route::put('/products/{id}/stock', [ProductController::class, 'updateStock'])->name('products.updateStock');

?>