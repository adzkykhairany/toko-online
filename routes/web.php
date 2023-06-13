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

Route::post('/products', [ProductController::class, 'createProduct']);
Route::get('/products', [ProductController::class, 'getAllProducts']);
Route::get('/products/{id}', [ProductController::class, 'getProductById']);
Route::put('/products/{id}', [ProductController::class, 'updateProduct']);
Route::delete('/products/{id}', [ProductController::class, 'deleteProduct']);
Route::get('/products/available', [ProductController::class, 'getAvailableProducts']);
Route::get('/products/unavailable', [ProductController::class, 'getUnavailableProducts']);
Route::put('/products/{id}/stock', [ProductController::class, 'updateProductStock']);

?>