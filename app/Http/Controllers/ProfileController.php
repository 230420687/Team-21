<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    //show the orders of the user logged in
    public function show(){
        $orders = Order::where('user_id', Auth::id())->get();
        return view('profile', compact('orders'));
    }
}
?>