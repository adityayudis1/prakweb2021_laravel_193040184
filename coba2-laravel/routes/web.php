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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about' ,[
        "title" => "about",
        "name" => "aditya yudis",
        "email" => "adityayudis2@gmail.com",
        "image" => "annie.jpg"
    ]);
});

Route::get('/blog',[PostController::class, 'index']);

Route::get('posts/{post:slug}',[PostController::class, 'show']);

Route::get('/catagories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});