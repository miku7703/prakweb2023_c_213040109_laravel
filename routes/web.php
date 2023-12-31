<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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





Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/{slug}',[PostController::class, 'show']);

