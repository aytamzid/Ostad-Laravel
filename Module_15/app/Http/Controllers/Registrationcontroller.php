<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    // Task 1: Request Validation

    public function Validate(Request $request){
        $request->validate(
            [
                'name'=>'required|string|min"2'
                'email'=>'required|email'
                'password'=>'required|string|min:8'
            ]
            );
            return back()->withSuccess('Registration Successful');
    }
}
