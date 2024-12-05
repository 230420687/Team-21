<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Retrieve all products from the database
        $products = Product::all();

        // Return a view and pass the data to it
        return view('products.index', compact('products'));
    }
    public function show($product_id){
return view('/productdesc', ['product' => Product::find($product_id)]);}

    public function showlap(){
        #$products = Product::where('category_id',1)->get()->toArray();

        $products = Product::all();
        return view('/Laptops', compact('products'));
        #return view('/Laptops',compact('products'));
    }
}
?>