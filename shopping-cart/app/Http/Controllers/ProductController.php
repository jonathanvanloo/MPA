<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Routes;
use Illuminate\Http\Request;
use App\Models\Product;
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
       dd($request->session()->get('cart'));
       return redirect()->route('products');
    }
}
