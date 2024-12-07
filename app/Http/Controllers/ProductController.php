<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

}
?>