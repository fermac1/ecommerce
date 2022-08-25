<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        return view('category', ['categories'=>$categories]);
    }

    public function create()
    {
        return view('category');
    }

    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'category_name'=> 'required',
            'slug'=> 'required'
        ]);

        //create a new product in database

        Category::create($request->all());
        return redirect('admin/product');
    }

    // public function show(Category $category)
    // {
    //     return view('product', compact('product' ));
    // }
    
    public function show($id)
    {
        // $latest_products = Product::orderBy('created_at', 'DESC')
        //                             ->where('cat_id', $id)
        //                             ->take(4)->get();

        // $categories = DB::table('categories')->get();

        $category_products = Product::where('cat_id', $id)
                                    ->get();
                
        return view('index/{id}', compact('category_products'));
    }
}
