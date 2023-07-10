<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function page(Request $request)
    {
        return view('pages.article');
    }
    public function articleData(Request $request)
    {
        return Article::find($request->id);
    }
    public function allComments(Request $request)
    {
        return Comment::find($request->id)->get();
    }
    //     public function addComment(Request $request)
    //     {
    //         return Comment::find($request->id)->insert($request->input());
    //     }
    public function addComment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->message = $request->input('message');
        $comment->article_id = $id;
        $comment->save();


    }
}
