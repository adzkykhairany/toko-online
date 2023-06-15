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

Route::post('/products', [ProductController::class, 'create']);
Route::get('/products', [ProductController::class, 'getAll']);
Route::get('/products/{id}', [ProductController::class, 'getById']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'delete']);

Route::get('/products/available', [ProductController::class, 'getAvailable']);
Route::get('/products/unavailable', [ProductController::class, 'getUnavailable']);
Route::put('/products/{id}/stock', [ProductController::class, 'updateStock']);

?>