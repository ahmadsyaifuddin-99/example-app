<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Asai",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt reprehenderit, rem adipisci unde a debitis, possimus doloremque tempore qui excepturi nemo facere cupiditate dicta. Minima atque adipisci veritatis enim eveniet vero est nostrum id natus facilis explicabo et, rerum optio! Sapiente possimus voluptatibus itaque molestias perferendis temporibus quasi illum illo dicta quam ex vero nihil unde, quis aliquid impedit veniam architecto! Et delectus at laborum quia iste voluptatem numquam illo, laboriosam ipsa nesciunt dolorem harum dolor sed nisi! Laborum, tenetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ahmad Syaifuddin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolores dignissimos voluptas ipsum omnis laudantium incidunt sint! Tempora amet iste doloremque eos eius at dolorum unde earum hic? Laboriosam, atque ullam molestias ipsam deleniti facere veniam. Voluptates mollitia nam magni? Doloribus consectetur blanditiis hic quis soluta, ad iure quod voluptas quaerat placeat voluptatem dolore, tempora adipisci quos natus possimus incidunt iste. Fugit et adipisci quasi minima provident dolor impedit praesentium hic nisi inventore, repellat reprehenderit error soluta odio explicabo qui, optio saepe quisquam sapiente expedita rerum amet est numquam voluptate. Odio vero repellendus adipisci? Libero ut quia dolor reiciendis cum in, fugiat totam. Nihil debitis dolorum quidem suscipit nesciunt consequatur enim repellendus pariatur, porro obcaecati harum, consequuntur vel et labore."
        ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];

        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
}
