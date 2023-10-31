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
        "title " => "Judul Post Pertama ",
        "slug" => "Judul-Post-Pertama",
        "Author" => "kahoizuku",
        "body" => "Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. Provident, labore, totam veniam illo iste modi dignissimos adipisci velit quasi veritatis accusantium necessitatibus dolorum voluptate. Nemo, nulla magnam, iure veniam error hic necessitatibus alias nobis ratione at adipisci velit ut ipsam repellendus, ab rerum quasi suscipit unde. Voluptate saepe quidem, rerum voluptatum dolorum facere adipisci asperiores facilis inventore assumenda, officia odio sunt mollitia cum aut ex ut enim beatae aliquid minima labore, placeat praesentium! Nostrum a magni mollitia cum neque quas."


],["title " => "Judul Post kedua ",
"slug" => "Judul-Post-kedua",
"Author" => "vinaa",
"body" => "Lorem ipsum dolor sit amet, 
consectetur adipisicing elit. Provident, labore, totam veniam illo iste modi dignissimos adipisci velit quasi veritatis accusantium necessitatibus dolorum voluptate. Nemo, nulla magnam, iure veniam error hic necessitatibus alias nobis ratione at adipisci velit ut ipsam repellendus, ab rerum quasi suscipit unde. Voluptate saepe quidem, rerum voluptatum dolorum facere adipisci asperiores facilis inventore assumenda, officia odio sunt mollitia cum aut ex ut enim beatae aliquid minima labore, placeat praesentium! Nostrum a magni mollitia cum neque quas."
]];




    return view('posts',[
        "title" => "Posts",
        "posts" => $blog_posts

    ]);
});
