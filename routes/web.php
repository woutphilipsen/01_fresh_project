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
// Store the new article
Route::post('/articles', 'ArticlesController@store');
// Edit article
Route::get('/articles/create', 'ArticlesController@create');
// Show 1 article
Route::get('/articles/{article}', 'ArticlesController@show');

Route::get('/articles/{article}/update', 'ArticlesController@update');