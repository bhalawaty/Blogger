<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class Tagscontroller extends Controller
{
    public function index(Tag $tags){

        $posts =$tags->posts;

        return view('posts.index',compact('posts'));
    }
}
