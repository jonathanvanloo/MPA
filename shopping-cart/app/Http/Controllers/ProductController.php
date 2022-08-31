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

//  this class controls the products
class ProductController extends Controller
{
//    gets all the products
    public function index()
    {
        $product = Product::all();

        return view('products',[
            'products' => $product
        ]);
    }

//    gets individual products
    public function getProduct($id) {

        $product = Product::all();

        return view('product', [
            'product' => $product[$id-1]
        ]);
    }

//    gets all category's
    public function getCategory(Category $category) {
        return view('category',[
            'product' => $category->product
        ]);
    }

//    continues to checkout
    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

//    checks out and saves the order
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

//    gets all the orders
    public function getOrder() {
        return view('dashboard',[
            'order' => Order::all()
        ]);
    }

}
