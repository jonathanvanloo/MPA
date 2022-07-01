<?php

use App\models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/add-to-cart/{id}', [ProductController::class, 'getAddToCart'])->name('addToCart');

Route::resource('/', ProductController::class)->name('index', 'shop');

Route::get('/shopping-cart', [ProductController::class, 'getCart'])->name('shoppingCart');
//Route::resource('/shopping-cart', ProductController::class)->name('getCart', 'shoppingCart');
//Route::get('/shopping-cart', 'ProductController@getCart')->name('shoppingCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
