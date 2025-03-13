<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BasketController extends Controller
{
  //showing the basket of the user logged in
  public function index()
  {
    $basketItems = BasketItem::where('user_id', Auth::id())->with('product')->get();
    return view('basket', compact('basketItems'));
  }

  //adding a product to the basket
  public function add(Request $request)
  {
    //validating the data being inputted
    $request->validate([
      'product_id' => 'required|exists:products,product_id',
      'quantity' => 'required|integer|min:1',
    ]);


    //getting the user logged in
    $userId = Auth::id();
    if (!$userId) {
      return redirect()->route('/signup')->with('error', 'Please login to add a product');
    }

    //retrieving the product id and quantity
    $productId = $request->product_id;
    $quantity = $request->quantity;

    //get the basket item that is currently being added
    $basketItem = BasketItem::where('user_id', $userId)->where('product_id', $productId)->first();

    //check if the item exists already
    if ($basketItem) {

      $basketItem->quantity += $quantity;
      $basketItem->save();
    } else {
      BasketItem::create([
        'user_id' => $userId,
        'product_id' => $productId,
        'quantity' => $quantity
      ]);
    }

    return redirect()->back()->with('success', 'product added to the basket');
  }


  //updating the quantity of the item
  public function update(Request $request, $id)
  {
    //validating the inputs
    $request->validate([
      'quantity' => 'required|integer|min:1',
    ]);
    $basketItem = BasketItem::where('user_id', Auth::id())->findOrFail($id);
    //updating the quantity of the basket
    $basketItem->update(['quantity' => $request->quantity]);

    //redirect to the basket page
    return redirect()->route('basket.index')->with('success', 'Quantity has been increased for the product');
  }


  //removing the item from the basket
  public function remove($id)
  {


    $basketItem = BasketItem::where('user_id', Auth::id())->findOrFail($id);

    $basketItem->delete();

    return redirect()->route('basket.index')->with('success', 'Product removed from the basket');
  }

  //clearing the basket
  public function clear()
  {
    BasketItem::where('user_id', Auth_id())->delete();
    return redirect()->route('basket.index')->with('success', 'Basket deleted');
  }
}
