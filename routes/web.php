<?php

use Illuminate\Support\Facades\Route;

// Generate a test view
Route::get('test', function() {
    return view('test');
});

// Pass & Request data to your views
Route::get('/', function () {
    return view('welcome');
});

// Render the welcome page
Route::get('/welcome', function () {
    return view('welcome');
});

// Render the contact page
Route::get('/contact', function() {
    return view('contact');
});

// Render the about page
Route::get('/about', function() {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

// Route to article controller
Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/posts/{post}', 'PostsController@show');