<?php

namespace App\Models;

class Blog
{
    private static $blogs = [
        [
            "title" => "Judul Blog Pertama",
            "author" => "Rinaldi",
            "slug" => "judul-pertama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cupiditate dolore, 
                       laudantium illo nostrum odio repellat soluta mollitia ducimus dolorum rerum ipsum provident non. 
                       Cumque ducimus officiis quibusdam maxime voluptates."
        ],
        [
            "title" => "Judul Blog Kedua",
            "author" => "Fauzi",
            "slug" => "judul-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente cupiditate dolore, 
                       laudantium illo nostrum odio repellat soluta mollitia ducimus dolorum rerum ipsum provident non. 
                       Cumque ducimus officiis quibusdam maxime voluptates."
        ]
    ];

    public static function all(){
        // return self::$blogs;
        return collect(self::$blogs);
    }

    public static function find($slug){
        // $blogs = self::$blogs;
        $blogs = static::all();

        // $new_blog = [];
        // foreach($blogs as $blog){
        //     if($blog["slug"] === $slug){
        //         $new_blog = $blog;
        //     }
        // }

        return $blogs->firstWhere('slug', $slug);
    }
}
