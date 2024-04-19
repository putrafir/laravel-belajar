<?php

namespace App\Models;



class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Putra Firdaus",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus qui doloribus
            deleniti sed soluta obcaecati magnam vel, nostrum odit exercitationem id quam
            aspernatur dicta? Adipisci, nemo obcaecati! Pariatur, obcaecati quis fuga itaque
            quaerat reiciendis ullam porro perspiciatis, unde nesciunt nostrum nisi
            voluptates, adipisci quisquam tempore eligendi sit! Eius, enim a.
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloremque quidem
            aut enim consectetur aliquam doloribus corrupti ipsum delectus a? Vel,
            assumenda! Repudiandae dolorum consequatur atque explicabo earum, quo soluta
            voluptatibus ullam optio deleniti! Explicabo, eum qui unde corrupti, cum error
            debitis quam similique ut sit odit dolores quia totam praesentium labore
            corporis, deleniti ab molestias nobis. Molestias fugiat at similique tempora
            mollitia, qui iste repellendus itaque aut vero harum nostrum enim. Nulla beatae
            est provident illum laudantium minus eius ut hic culpa praesentium facere
            impedit, molestias temporibus deleniti, voluptatem corporis debitis ea esse
            quisquam, tenetur dolorem a ipsam. Odio.
            
            "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();


        return $posts->firstWhere('slug', $slug);
    }
}
