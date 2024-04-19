<?php

use App\Http\Controllers\PostController;
use App\Models\Categories;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "name" => 'Ahmad Putra Firdaus',
        "email" => 'ajafirdaus@gmail.com',
        "image" => 'we.jpeg'

    ]);
});



Route::get('/blog', [PostController::class, 'index']);
// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Categories::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Categories $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
