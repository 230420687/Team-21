<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //the search function for search bar
    public function search(Request $request){
        $request->validate([
            'query' => 'required|string'
        ]);

        $query = $request->input('query');

        $products = Product::where('product_name', 'LIKE', "%{$query}%")
            ->orWhere('product_description', 'LIKE', "%{$query}%")
            ->get();

        return view('search.results', compact('products', 'query'));
        
    }
}
