<?php

namespace App\Http\Controllers\admin;
use App\Models\offer;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers= Offer::all();
        // $categories = Category::all();
        return view('admin.crud_offer.alloffers',compact('offers'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.crud_offer.createoffer',compact('categories'));
   
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
            'offer_percentage'=>"required|numeric",
            "description"=>"required|string|max:500",
            "image"=>"required|image|mimes:png,jpg,gif,gpeg",
            "main_image"=>"required|image|mimes:png,jpg,gif,gpeg",

        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('front/uploads'),$imageName);

        $offername = time().'.'.$request->main_image->extension();
        $request->main_image->move(public_path('front/uploads/offer'),$offername);

        $offer = new Offer();
        // $product= $request->all();
        // Product::create($product);
        $offer->name = $request->name;
        $offer->price = $request->price;
        $offer->offer_percentage = $request->offer_percentage;
        $offer->description = $request->description;
        $offer->category_id = $request->category_id;
        $offer->image = $imageName;
        $offer->main_image = $offername;
        $offer->save();

        return back()->with('success','data inserted  successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Offer = Offer::find($id);
        $Offer->delete();
        return redirect()->back()->with(session()->flash('success', 'Delete Successfully'));;
   
    }
}
