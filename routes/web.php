<?php

use Illuminate\Support\Facades\Route;

// Pass & Request data to your views
Route::get('/', function () {
    return view('welcome');
});

// Render the about page
Route::get('/about', function() {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

// Show all articles
Route::get('/articles', 'ArticlesController@index');

// Route to article controller
Route::get('/articles/{article}', 'ArticlesController@show');