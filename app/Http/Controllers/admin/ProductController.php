<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::all();
        $categories = Category::all();
        return view('admin.crud_product.allproducts',compact('categories','products'));
        // return view('front.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.crud_product.create_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>"required|string|max:150",
            'price'=>"required|numeric",
            "description"=>"required|string|max:500",
            "image"=>"required|image|mimes:png,jpg,gif,gpeg"
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('front/uploads'),$imageName);

        $product = new Product();
        // $product= $request->all();
        // Product::create($product);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->image = $imageName;
        $product->save();

        return back()->with('success','data inserted  successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $category_id = Category::findOrFail($product->category_id);
        return view('admin.crud_product.edit_product', compact('product','category_id','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [

            'name'=>"required|string|max:150",
            'price'=>"required|numeric",
            "description"=>"required|string|max:500",
            "image"=>"required|image|mimes:png,jpg,gif,gpeg"
        ], [

            'name.required' => 'Please Enter The product Name',
            'name.unique' => 'product Name Pre-Registered',

        ]);
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('front/uploads'),$imageName);
        $image = $imageName;
        $product = Product::find($id);
        $product->update([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image'=>$image,
        ]);
        
        return redirect(route('allproducts.index'))->with(session()->flash('success', 'Edit Successfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with(session()->flash('success', 'Delete Successfully'));;
   
    }
}
