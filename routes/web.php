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
    return view('home',[
        "title" => "Home"

    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Nadjrilillah",
        "email" => "muhammadajil7703@gmail.com",
        "image" => "kaho.jpg"

    ] );
});





Route::get('/blog', function () {
    $blog_posts = [[
        'title' => 'Judul Postingan',
        'author' => 'kaho izuku',
        'slug' => 'judul-postingan',
        'body' => 'sLorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto tempore voluptas doloremque beatae molestiae neque laboriosam possimus. Iure, odio dicta, quo in deleniti, eum cum numquam magni possimus sapiente accusamus rem veniam quasi molestias? Accusantium eaque iure quo vel praesentium laborum consectetur molestias iusto nisi accusamus. Ad consectetur in molestias error quo quos accusamus aliquam velit earum, dignissimos ea nostrum sint vitae iure amet ipsa. Pariatur obcaecati vitae, explicabo, voluptatem deserunt facere quisquam nemo id, maiores quia quis dicta.'
    ] ,
    [
        'title' => 'Judul Postingan 2',
        'author' => 'vinaa',
        'slug' => 'judul-postingan2',
        'body' => 'sLorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto tempore voluptas doloremque beatae molestiae neque laboriosam possimus. Iure, odio dicta, quo in deleniti, eum cum numquam magni possimus sapiente accusamus rem veniam quasi molestias? Accusantium eaque iure quo vel praesentium laborum consectetur molestias iusto nisi accusamus. Ad consectetur in molestias error quo quos accusamus aliquam velit earum, dignissimos ea nostrum sint vitae iure amet ipsa. Pariatur obcaecati vitae, explicabo, voluptatem deserunt facere quisquam nemo id, maiores quia quis dicta.'
    ]
     
];




    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});


Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            'title' => 'Judul Postingan',
            'author' => 'kaho izuku',
            'slug' => 'judul-postingan',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto tempore voluptas doloremque beatae molestiae neque laboriosam possimus. Iure, odio dicta, quo in deleniti, eum cum numquam magni possimus sapiente accusamus rem.'
        ],
        [
            'title' => 'Judul Postingan 2',
            'author' => 'vinaa',
            'slug' => 'judul-postingan2',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iusto tempore voluptas doloremque beatae molestiae neque laboriosam possimus. Iure, odio dicta, quo in deleniti, eum cum numquam magni possimus sapiente accusamus rem.'
        ]
    ];

    $new_post = null;

    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
            break; // Jika slug ditemukan, keluar dari loop
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});