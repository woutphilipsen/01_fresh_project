<?php

use Illuminate\Support\Facades\Route;

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

// Generate a test view
Route::get('test', function() {
    return view('test');
});

// Pass & Request data to your views
Route::get('/', function () {
    return view('test', [
        'name' => request('name')
    ]);
});

// Render the welcome page
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts/{post}', 'PostsController@show');

/* 
// setup a route to accept wildcards
// wildcard is available in callback function
Route::get('/posts/{post}', function ($post) {
    // Setup wildcards for the slug in associative array
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post',
        'my-second-post' => 'Now I am getting the hang of this blogging thing'
    ];

    // Generate a 404 page when wildcard slugs are not found in $posts
    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found.');
    }

    // If we do find the slug we provide the value associated with that slug
    return view('post', [
        'post' => $posts[$post]
    ]);
});
*/
