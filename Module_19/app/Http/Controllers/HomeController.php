<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function page(Request $request) {
        return view('pages.home');
    }
    public function featuredArticle(Request $request) {
        return Article::get();
    }
}
