<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        // $allSessions = Session::all();

        // dd($allSessions);
        $cart = session()->get('cart');
        
        if ($cart == null)
            $cart = [];

        return view('cart')->with('cart', $cart);
    }

    public function addToCart(Request $request){
        // $products = Product::find($id);
        $product_qty = $request->input('product_qty');
        $product_id = $request->input('product_id');
        $products = Product::find($product_id);
        $cart = session()->get('cart');

        $cart[$product_id] = [
            'id' => $products->id,
            'name' => $products->name,
            'qty' => $product_qty,
            'price' => $products->new_price,
            'image1' => $products->image1
        ];

        session()->put('cart', $cart);

        
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        // return redirect('cart')->with('success', 'Product added to cart successfully!');
        return response()->json(['url'=>url('cart')]);
        // return response()->json(['status'=>true,"redirect_url"=>url('cart')]);

    }


    public function updateCart(Request $request)
    {
        if($request->id and $request->qty)
        {

            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Your Cart updated successfully');
        }
    }

    public function removeCart(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Item removed successfully');
        }
    }
}
