<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller // controller to perform form registration 
{
    public function index() // use to redirect to Registration page
    {
        return view('form');
    }
    public function pass(Request $request) // function for printing form data 
    {        
      $request->validate( // form validatoin 
        [
            'username' => 'required', // username must require
            'email' => 'required|email',//email must require
            'password' => 'required|confirmed',//password and again password must same
            'password_confirmation'=> 'required',
        ]
        );
        echo"<pre>"; 
         print_r($request->all()); // printing form information
    }
}
