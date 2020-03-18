<?php

use Illuminate\Support\Facades\Route;

// Pass & Request data to your views
Route::get('/', function () {
    return view('welcome');
});

// container example
Route::get('/container', function () {
    $container = new \App\Container();
    
    $container->bind('example', function() {
        return new \App\Example();
    });

    $example = $container->resolve('example');

    $example->go();
});

// Render the about page
Route::get('/about', function() {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

// ----------------ARTICLE ROUTES----------------

// Show all articles
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
// Store the new article
Route::post('/articles', 'ArticlesController@store');
// Edit article
Route::get('/articles/create', 'ArticlesController@create');
// Show 1 article
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
// Edit article 
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
// Update the article
Route::put('/articles/{article}', 'ArticlesController@update');

// ----------------END ARTICLE ROUTES------------