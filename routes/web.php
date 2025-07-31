<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title"  => "Post Pertama",
            "slug"   => "post-pertama",
            "author" => "Dimas",
            "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto cupiditate iste natus velit dolores ab consectetur ullam odit repellendus excepturi cum doloribus"
        ],
        [
            "title"  => "Post Kedua",
            "slug"   => "post-kedua",
            "author" => "Bagus",
            "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto cupiditate iste natus velit dolores ab consectetur ullam odit repellendus excepturi cum doloribus, minima, asperiores tempora aliquam, expedita obcaecati. Eaque!"
        ],

    ];
    return view('blog',[
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title"  => "Post Pertama",
            "slug"   => "post-pertama",
            "author" => "Dimas",
            "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto cupiditate iste natus velit dolores ab consectetur ullam odit repellendus excepturi cum doloribus"
        ],
        [
            "title"  => "Post Kedua",
            "slug"   => "post-kedua",
            "author" => "Bagus",
            "body"   => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores architecto cupiditate iste natus velit dolores ab consectetur ullam odit repellendus excepturi cum doloribus, minima, asperiores tempora aliquam, expedita obcaecati. Eaque!"
        ],

    ];
    $single_post = [];
    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $single_post = $post;
        }
    }
    //dd($single_post);
    
    return view('blog-single',[
        "title" => "Blog",
        "post"  => $single_post
    ]);
});