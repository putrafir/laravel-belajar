<?php

use App\Http\Controllers\DashboardPostConrtoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "title" => "Home",
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostConrtoller::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostConrtoller::class)->middleware('auth');




// Route::get('/categories/{category:slug}', function (Categories $category) {
//     return view('posts', [
//         'title' => "Post byrec Category:  $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post by Author: $author->name",
//         'posts' => $author->posts->load('category', 'author')

//     ]);
// });
