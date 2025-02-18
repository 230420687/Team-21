<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model_name; 

class CustomerDetailsController extends Controller
{

    
        // Display the form
        public function edit()
        {
            return view('customerUpdate');
        }
    
        // Update the customer's details
        public function update(Request $request)
        {
            $customer = Auth::user();
    
            // Validate the input data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,',
                'phone' => 'required|string|min:10|max:15|regex:/^[0-9+\-\s()]*$/',
            ]);
    
            // Update the customer's details
            $customer->update($validatedData);
    
            return redirect()->route('customer.edit')->with('success', 'Your details have been updated successfully.');
        }
    
        // Delete account
        public function delete(Request $request)
        {
            $customer = Auth::user();
    
            // Validate the password
            $request->validate([
                'password' => 'required',
            ]);
    
            // Check if the password is correct
            if (!Hash::check($request->password, $customer->password)) {
                return redirect()->route('customer.edit')->withErrors(['password' => 'Incorrect password.']);
            }
    
            $customer->delete();
    
            return redirect('/home')->with('success', 'Your account has been deleted successfully.');
        }
    
}
