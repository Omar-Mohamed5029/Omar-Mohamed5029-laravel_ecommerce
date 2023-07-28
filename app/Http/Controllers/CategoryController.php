<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category_name)
    {

        $category = Category::where('name','=',$category_name)->first();

        $products=Product::where('category_id','=',$category->id)->get();
        return view('front.category',compact('products','category_name'));
    }

}
