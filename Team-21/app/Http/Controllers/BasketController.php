<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    //
    public function index(){
        $basketItems = BasketItem::where('user_id', Auth::id())->with('product')->get();
        return view('basket', compact('basketItems'));
    }

    public function add(Request $request, $productId){
        $basketItem = BasketItem::firstOrCreate(
            ['user_id' => Auth::id(),
            'product_id' => $productId
        ], 
        [
            'quantity' => $request->quantity ?? 1,

        ]

        );

        if(!basketItem->wasRecentlyCreated){
            $basketItems->increment('quantity', $request->quantity ?? 1);
        }

        return response()->json(['message' => 'Item added to basket']);
    }


    public function updateQuantity(Request $request, $id){
        $basketItem = BasketItem::where('user_id', Auth_id())->findOrFail($id);
        $basketItem->update(['quantity' => $request->quantity]);

        return response()->json(['message' => 'Quantity updated']);
    }


    public function remove($id){
        $basketItem = BasketItem::where('user_id', Auth_id())->findOrFail($id);
        $basketItem->delete();

        return response()->json(['message' => 'Item removed']);
    }

    public function clear(){
        BasketItem::where('user_id', Auth_id())->delete();
        return response()->json(['message' => 'Basket cleared']);
    }
}
