<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupPageController extends Controller
{
    public function page(Request $request){
        return view('pages.signup');
    }
}
