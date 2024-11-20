<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //
    public function showForm(){
        return view('register');
    }

    public function register(Request $request){
        if($request ->isMethod('post')){
            $validInput = $request->validate([
                'username' => 'required|string',
                'email' => 'required|string|email',
                'password' => 'required|string|min:8',
            ]);
        
 

            try{
                $user = new User();
                $user->username = $validInput['username'];
                $user->email = $validInput['email'];
                $user->password = password_hash($validInput['password'], PASSWORD_DEFAULT);
                $user->save();


                return redirect('/')->with('success', 'You have completed Registration');
            }
            catch(PDOexception $ex){
                return back()->withInput()->withErrors(['An error occurred' => 'Please try again. Registration failed']);

            }
        }
    }
}
