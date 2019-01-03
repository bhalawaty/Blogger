<?php

namespace App\Http\Controllers;
use App\Post;
use App\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {

        $posts=Post::latest()
            ->filter(request(['month','year']))
            ->get();

        return view('posts.index',compact('posts'));

}

    public function create()
    {
        return view('posts.create');

    }
    public function store()
    {

        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
        auth()->User()->publish( New Post (request(['title', 'body'])));



       return redirect('/');

    }
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

}