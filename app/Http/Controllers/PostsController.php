<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        return view('home',[
           'posts' => $post->latestFirst()->isLive()->get(),
        ]);
    }

    public function tagged(Tag $tag)
    {
        return view('posts.tag',[
            'posts' => $tag->posts()->latestFirst()->isLive()->get(),
            'tag' => $tag,
        ]);
    }


}
