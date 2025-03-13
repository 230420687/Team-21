<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{

    public function index(Request $request)
    {
        
        // Retrieve all products from the database
        $products = Product::all();

        $inputvalue = dump(request()->get('sort'));
        if($inputvalue != 'default'){
        $products = $products->sortBy($inputvalue);
        $result = compact('products');
        }
        else{
            $result = compact('products');
        }
        // Return a view and pass the data to it
        return view('products.index', $result);
    }
    public function show($product_id){
return view('/productdesc', ['product' => Product::find($product_id)]);}
    
public function addproduct(Request $request){
        if($request ->isMethod('post')){
            {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric',
                    'description' => 'required|string',
                    'quantity' => 'required|integer',
                    'imgid' => 'required|string',
                ]);
        Product::create([
            'product_name' => $request->name,
            'product_description' => $request->description,
            'product_price' => $request->price,
            'stock_quantity' => $request->quantity,
            'imgid' => $request->imgid,
        ]);
        return redirect()->route('addproduct')->with('success', 'Product added successfully.');
    }
}



}
}
