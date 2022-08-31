<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [ProductController::class, 'index'])->name('shop');

Route::get('/product/{id}', [ProductController::class, 'getProduct'])->name('product');

Route::get('/category/{category}', [ProductController::class, 'getCategory'])->name('category');

Route::get('/add-in-cart/{id}', [CartController::class, 'getAddInCart'])->name('addInCart');

Route::get('/add-to-cart/{id}', [CartController::class, 'getAddToCart'])->name('addToCart');

Route::get('/delete-from-cart/{id}', [CartController::class, 'getDeleteFromCart'])->name('deleteFromCart');

Route::get('/shopping-Cart/', [CartController::class, 'getCart'])->name('shoppingCart');

Route::get('/Checkout/', [ProductController::class, 'getCheckout'])->name('checkout');

Route::post('/Checkout/', [ProductController::class, 'postCheckout'])->name('checkout');

Route::get('/dashboard', [ProductController::class, 'getOrder'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
