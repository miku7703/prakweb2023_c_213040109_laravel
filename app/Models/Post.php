<?php

namespace App\Models;


class Post
{

        Private static $blog_post =  [[
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

          ] ] ;

          public static function all()
          {
            return collect (self::$blog_post);
          }

          public static function find ($slug)
          {

            $posts = static::all();
            return  $posts-> firstWhere('slug', $slug);


          }
}
