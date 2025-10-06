<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('blog',[
            "title" => "Blog",
            //"posts" => Post::all(),
            // Lazy Load
            //"posts" => Post::latest()->get(),
            // Eager Load
            "posts" => Post::latest()->get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('blog-single',[
            "title" => "Blog",
            //"post"  => Post::find($id),
            "post"  => $post,
        ]);
    }
}
