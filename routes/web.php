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
// Show 1 article
Route::get('/articles/{article}', 'ArticlesController@show');
// Edit article
Route::get('/articles/{article}/edit', 'ArticlesController@edit');

Route::get('/articles/{article}/update', 'ArticlesController@update');