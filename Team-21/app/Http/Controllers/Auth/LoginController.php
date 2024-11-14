<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function showLoginForm(){
        return view();
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);


        if(Auth::attempt($request->only('username', 'password'))){
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'Invalid Credentials'
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
