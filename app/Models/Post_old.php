<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $blog_posts = static::all();
        // $single_post = [];
        // foreach($blog_posts as $post){
        //     if($post['slug'] === $slug){
        //         $single_post = $post;
        //     }
        // }
        //return $single_post;
        return $blog_posts->firstWhere('slug', $slug);
    }
}
