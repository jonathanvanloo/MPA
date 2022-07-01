<?php

namespace App\Http\Controllers;

use App\Routes;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('products',[
            'products' => $product
        ]);
    }

    public function getAddToCart(Request $request, $id) {
       $product = Product::find($id);
       $oldCart = Session::has('cart') ? Session::get('cart') : null;
       $cart = new Cart($oldCart);
       $cart->add($product, $product->id);

       $request->session()->put('cart', $cart);
       return redirect()->route('shop');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
