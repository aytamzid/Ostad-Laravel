<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        Post::destroy($id);

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
