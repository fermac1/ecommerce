<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        
        $category_product = Category::select('*')->where('category_name', '!=','NULL')->get();
        return view('wishlist', compact('wishlist', 'category_product'));
    }

    public function add(Request $request){
        if(Auth::check()){
          $prod_id = $request->input('product_id');  
            if(Product::find($prod_id)){
                $wish = new Wishlist();
                $wish->prod_id = $prod_id;
                $wish->user_id = Auth::id();
                $wish->save();

                return response()->json(['status'=>'Product added to Wishlist']);

            }else{
                return response()->json(['status'=>'Product does not exist']);
            }
        }else{
            return response()->json(['status'=>'Login to continue']);
        }
        return view('wishlist', compact('wishlist'));
    }

    public function remove(Request $request)
    {
        if(Auth::check()) {
            $prod_id = $request->input('product_id');
            if(Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
            $wish = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
            $wish->delete();
            return response()->json(['status'=>'Product removed successfully']);
            }
        }else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
}
