<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eri Ardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo maxime eos nulla, 
            aspernatur natus facere ut fugiat mollitia. Eum odio repellat, nemo consequatur accusamus id. 
            Doloribus, optio. Optio amet beatae laudantium hic harum incidunt ab placeat necessitatibus 
            quaerat voluptates cumque explicabo iusto aliquam quia dignissimos, deleniti accusantium earum 
            assumenda. Itaque totam voluptatibus magni, odio pariatur perspiciatis repudiandae repellat 
            voluptas provident rerum cupiditate porro distinctio. Officia commodi assumenda iure similique
            tempora quod cum dolores eligendi culpa modi aperiam, blanditiis perferendis. Hic?"
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "David Beckham",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum enim eaque fugiat id ducimus 
            tempora natus dolor commodi nostrum rerum, qui quam officiis autem mollitia architecto alias 
            doloribus. Nam ratione corporis nobis iure, eaque magni quis! Dignissimos facere similique minus 
            numquam harum maiores ullam at ipsum reiciendis quam laboriosam fuga blanditiis nam optio odio vero 
            delectus, accusamus sequi, beatae repellendus iste? Autem nisi doloremque ratione doloribus eius 
            libero porro totam adipisci, aperiam voluptatem cupiditate, inventore unde at quae blanditiis, saepe 
            nihil rerum consequatur. Eos assumenda consectetur necessitatibus quam ipsam cumque provident, 
            ab dolores recusandae quasi quis fugit dolore. Iusto, consectetur!"
        ]
    ];
    public static function all() {
        return collect (self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
