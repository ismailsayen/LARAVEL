<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show() {
        return view("login.login");
    }
    public function store(Request $request) {
        $values=['email'=>$request->email,'password'=>$request->password];
        if(Auth::attempt($values)){
            $request->session()->regenerate();
            return to_route('profiles.index')->with('success', 'Vous etes bien connectée!!😁');
        }else{
            return back()->withErrors([
                'email'=>'Email ou Password Incorrecte'
            ]);
        };

    }
    public function logOut(){
        Session::flush();
        Auth::logout();
        return to_route('login');
    }
}
