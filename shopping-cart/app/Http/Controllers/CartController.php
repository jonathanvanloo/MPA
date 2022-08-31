<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//  this class controls th cart
class CartController extends Controller
{

//    add's a product to the cart
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);
        return redirect()->route('shop');
    }

//    deletes a product from the cart
    public function getDeleteFromCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteProduct($id);
        Session::put('cart', $cart);
        if (url()->previous() == "http://127.0.0.1:8000/") {
            return redirect()->route('shop');
        } else { return redirect()->route('shoppingCart'); }
    }

//    add's additional already added products to the cart
    public function getAddInCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addProduct($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

//    gets all the products in the cart
    public function getCart() {
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}
