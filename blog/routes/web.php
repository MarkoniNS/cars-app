<?php

use Illuminate\Support\Facades\Route;
use App\Model\Posts;

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
    return view('welcome');
});
 
Route::get('/about', function () {
    return view('about');
});

Route::get('/posts', function () {
    $posts = Post::where('published', 1)->get();

    return view('posts', compact('posts'));
});

Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);

    return view('post', compast('post'));
})->name('single-post');