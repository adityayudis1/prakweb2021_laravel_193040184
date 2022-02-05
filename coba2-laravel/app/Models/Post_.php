<?php

namespace App\Models;

class Post{

    private static $blog_posts = [
        [
            "title" => "Judul post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "aditya yudis",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti excepturi officiis totam quod nobis. Doloremque cum harum illum incidunt. Aliquid impedit dolores iure id unde. Praesentium deserunt cumque asperiores fuga unde, id libero, recusandae rem enim at odio repellat quibusdam reiciendis repudiandae et nemo ut, doloribus consequatur eius voluptatem vero quasi aperiam laboriosam aliquid! Similique aliquid perferendis hic reiciendis explicabo nihil est doloremque ex, eos excepturi nobis sit ipsum minima optio iste quos repellat alias impedit necessitatibus maiores assumenda! Corrupti."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "aditya yudis",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti excepturi officiis totam quod nobis. Doloremque cum harum illum incidunt. Aliquid impedit dolores iure id unde. Praesentium deserunt cumque asperiores fuga unde, id libero, recusandae rem enim at odio repellat quibusdam reiciendis repudiandae et nemo ut, doloribus consequatur eius voluptatem vero quasi aperiam laboriosam aliquid! Similique aliquid perferendis hic reiciendis explicabo nihil est doloremque ex, eos excepturi nobis sit ipsum minima optio iste quos repellat alias impedit necessitatibus maiores assumenda! Corrupti."
        ]    
    ];

    public static function all(){
        return collect (self::$blog_posts);
    }    
    
    public static function find($slug){
        $posts = static::all();
        // $post =[];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $posts = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}