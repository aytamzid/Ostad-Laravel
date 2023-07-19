<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginPageController extends Controller
{
    public function page(Request $request){
        return view('pages.login');
    }
}
