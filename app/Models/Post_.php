<?php

namespace App\Models;

class Post_
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Arif Ahmad S",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam at suscipit voluptas iste unde nihil nobis. Soluta tenetur omnis esse inventore in illo eaque officia non velit dolores dolore impedit qui sit, corporis eius cumque est autem hic distinctio! Earum, esse accusantium? Nihil quibusdam numquam sint ducimus earum nesciunt dolorem beatae omnis, iste ipsum voluptate voluptas neque repudiandae ut iure vero quod provident, unde cum! Accusamus dolores, quam cum ullam excepturi quasi, fugiat eos vero dolorum perspiciatis nobis soluta officia."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Arif Ahmad S",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam at suscipit voluptas iste unde nihil nobis. Soluta tenetur omnis esse inventore in illo eaque officia non velit dolores dolore impedit qui sit, corporis eius cumque est autem hic distinctio! Earum, esse accusantium? Nihil quibusdam numquam sint ducimus earum nesciunt dolorem beatae omnis, iste ipsum voluptate voluptas neque repudiandae ut iure vero quod provident, unde cum! Accusamus dolores, quam cum ullam excepturi quasi, fugiat eos vero dolorum perspiciatis nobis soluta officia."
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
