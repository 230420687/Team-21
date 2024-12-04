<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $request->validate([
            'query' => 'required|string'
        ]);

        $query = $request->input('query');

        $products = Product::where('name', 'LIKE', "%{query}%")
            ->orWhere('description', 'LIKE', "%{query}%")
            ->get();

        return view('search.results', compact('products', 'query'));
        
    }
}
