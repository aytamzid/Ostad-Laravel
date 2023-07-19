<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassresetPageController extends Controller
{
    public function page(Request $request){
        return view('pages.passreset');
    }
}
