<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $request->validate([
            'search'=>"required|string|max:150",
        ]);
        $search = $request->search;
        $products= Product::where('name','LIKE','%'.$search.'%')->get();
       
        return view('front.search',compact('products'));
    }
}
