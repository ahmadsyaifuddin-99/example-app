<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Asai",
        "email" => "ahmadsyaifuddinbusinessman.gmail.com"
    ]);
});



Route::get('/posts', function () {

    $blog_posts = [
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
        ],
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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
        ],
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
