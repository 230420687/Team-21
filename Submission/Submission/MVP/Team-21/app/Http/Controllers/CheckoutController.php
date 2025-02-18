<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_name; 

class CheckoutController extends Controller
{
    //showing the checkout form
    public function showCheckout()
    {
        return view('checkout2');
    }

    //validating the field display any errors
    public function verifyCheckout(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'zip' => 'required|string|max:10',
            'cardName' => 'required|string|max:255',
            'cardNumber' => 'required|digits:16',
            'expiryDate' => 'required|date_format:Y-m',
            'cvv' => 'required|digits:3',
        ]);

        

        return redirect()->route('checkout.show')->with('success', 'Payment processed successfully!');
    }
}
