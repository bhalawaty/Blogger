<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

        $posts=Post::latest()->get();
        return view('posts.index',compact('posts'));

}

    public function create()
    {
        return view('posts.create');

    }
    public function store(Request $request)
    {

        Post::create($request->validate([

            'title'=>'required',
            'body'=>'required'
        ]));

        return redirect('/');

    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

}