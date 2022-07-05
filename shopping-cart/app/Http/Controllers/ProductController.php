<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Routes;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
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

    public function getProduct($id) {

        $product = Product::all();

        return view('product', [
            'product' => $product[$id-1]
        ]);
    }

    public function getCategory(Category $category) {
        return view('category',[
            'product' => $category->product
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

    public function getDeleteFromCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteProduct($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function getAddInCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addProduct($id);

        Session::put('cart', $cart);
        return redirect()->route('shoppingCart');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request) {
        if (!Session::has('cart')) {
            return redirect('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $order = new Order();
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        Auth::user()->orders()->save($order);
        Session::forget('cart');
        return redirect()->route('shop')->with('success', 'Successfully purchased products!');
    }

    public function getDashboard() {
        return view('dashboard',[
            'order' => Order::all()
        ]);
    }

}
