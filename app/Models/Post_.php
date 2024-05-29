<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama Post",
            "slug" => "judul-pertama-post",
            "author" => "Amrinaldi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet eum repellat commodi deserunt sit voluptatem cum veniam earum eligendi recusandae id, nulla numquam corrupti ex vel facere nostrum? Ipsa dolore eum eaque iure enim, illo facilis pariatur mollitia eligendi debitis iusto similique quaerat cum at animi! Doloremque a consectetur eius iure eaque molestiae sit magnam ut ea nostrum fuga minus maiores nesciunt culpa voluptates beatae laboriosam voluptatum deleniti, qui vel consequatur velit. Numquam vero magnam quod hic consequuntur. Fugit."
        ],
        [
            "title" => "Judul Kedua Post",
            "slug" => "judul-kedua-post",
            "author" => "Rizki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet eum repellat commodi deserunt sit voluptatem cum veniam earum eligendi recusandae id, nulla numquam corrupti ex vel facere nostrum? Ipsa dolore eum eaque iure enim, illo facilis pariatur mollitia eligendi debitis iusto similique quaerat cum at animi! Doloremque a consectetur eius iure eaque molestiae sit magnam ut ea nostrum fuga minus maiores nesciunt culpa voluptates beatae laboriosam voluptatum deleniti, qui vel consequatur velit. Numquam vero magnam quod hic consequuntur. Fugit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eveniet eum repellat commodi deserunt sit voluptatem cum veniam earum eligendi recusandae id, nulla numquam corrupti ex vel facere nostrum? Ipsa dolore eum eaque iure enim, illo facilis pariatur mollitia eligendi debitis iusto."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
