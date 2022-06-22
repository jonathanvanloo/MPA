<?php

use App\models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('products', [
        'products' => product::all()
    ]);
});

Route::get('products/{post}', function ($id) {
    return view('product', [
        'product' => product::firstOrFail($id)
    ]);
});
