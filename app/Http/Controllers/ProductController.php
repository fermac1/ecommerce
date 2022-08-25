<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // public function index(){
    //     $products = DB::table('products')->get();
        
    //     // $products = Product::where('cat_id', $id)
    //     // ->get();
    //     return view('product', ['products'=>$products]);
    // }

    public function create()
    {
        $category = Category::all();
        return view('admin.product', ['category'=>$category]);
    }

    public function add()
    {
        return view('admin.product');
    }

    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name'=> 'required',
            'slug'=> 'required',
            'cat_id'=> 'required',
            'new_price'=> 'required',
            'old_price'=> '',
            'discount'=> '', 
            'image1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048', 
            'description'=> 'required',
            'label'=> 'required'
        ]);

        $newImage1= $request->image1->getClientOriginalName();

        $request->image1->move(public_path('frontend/image/product'), $newImage1); 

        $newImage2= $request->image2->getClientOriginalName();

        $request->image2->move(public_path('frontend/image/product'), $newImage2); 

        Product::create([
            'name'=> $request->input('name'),
            'slug'=> $request->input('slug'),
            'cat_id'=> $request->input('cat_id'),
            'new_price'=> $request->input('new_price'),
            'old_price'=> $request->input('old_price'),
            'discount'=> $request->input('discount'),
            'image1'=> $newImage1,
            'image2'=> $newImage2,
            'description'=> $request->input('description'),
            'label'=> $request->input('label')
        ]);

        return redirect('admin/home');
    }

    public function show($slug)
    {
        $products = Product::where('slug', $slug)->first();
        $category_id = $products->cat_id;
        $related_products = Product::where('cat_id', $category_id)
                                    ->where('slug', '!=', $slug)
                                    ->take(4)->get();
        return view('view', compact('products', 'related_products'));
    }

    public function latest()
    {
        $latest_products = Product::orderBy('created_at', 'DESC')
                                    ->take(4)->get();
     
        $category_product = Category::select('*')->where('category_name', '!=','NULL')->get();

        // $data = Category::join('products', 'products.cat_id', '=', 'categories.id')
        
        // ->get(['products.new_price','products.qty','categories.category_name','products.name', 'products.id', 'products.image1','products.image2']);

        // $cat_prod = DB::table('categories')->join('products', 'categories.id')
        //                 ->select('')

        $cat_prod = DB::table('products')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->select('products.name as product_name', 'categories.category_name as category_name')
            ->get();
            // ->where('category_name','Electronics')->get();
         
            // dd( $cat_prod); 

        return view('index', compact('latest_products', 'category_product', 'cat_prod'));
    }

    public function viewCategory($id){
        $category = Category::where('id', $id)->first();
        
        $products = Product::where('cat_id', $category->id)->get();


        return view('product', compact('category', 'products'));
    }
    
   
}
