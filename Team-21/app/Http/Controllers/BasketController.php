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

    public function add(Request $request){
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $userId = Auth::id();
        if(!$userId){
            return redirect()->route('/signup')->with('error', 'Please login to add a product');

        }

        $productId = $request->product_id;
        $quantity = $request->quantity;

        $basketItem = BasketItem::where('user_id', $userId)->where('product_id', $productId)->first();

        if($basketItem){

            $basketItem->quantity += $quantity;
            $basketItem->save();
        
        }else{
            BasketItem::create([
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => $quantity
            ]);

        }

        return redirect()->back()->with('success', 'product added to the basket');

      
    }


    public function update(Request $request, $id){
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]); 
        $basketItem = BasketItem::where('user_id', Auth::id())->findOrFail($id);
        $basketItem->update(['quantity' => $request->quantity]);

        return redirect()->route('basket.index')->with('success', 'Quantity has been increased for the product');
    }


    public function remove($id){
        

        $basketItem = BasketItem::where('user_id', Auth::id())->findOrFail($id);

        $basketItem->delete();

        return redirect()->route('basket.index')->with('success', 'Product removed from the basket');
        
        
     
    }

    public function clear(){
        BasketItem::where('user_id', Auth_id())->delete();
        return redirect()->route('basket.index')->with('success', 'Basket deleted');

    }
}
