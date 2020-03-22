<?php

use Illuminate\Support\Facades\Route;

// ------------------HOME PAGE-------------------
    Route::get('/', function () {
        return view('welcome');
    });
// ----------------END HOME PAGE-----------------


// ------------------ABOUT PAGE------------------
    Route::get('/about', function() {
        return view('about', [
            'articles' => App\Article::take(3)->latest()->get()
        ]);
    });
// ----------------END ABOUT PAGE----------------

// -----------------CONTACT PAGE-----------------
    Route::get('/contact', 'ContactController@show');
    Route::post('/contact', 'ContactController@store');
// ---------------END CONTACT PAGE---------------


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


// -----------BASIC CONTAINER PRATICE------------
    // container on a other way with laravel app()
    Route::get('/container1', function() {
        $example = app()->make(App\Example::class);

        ddd($example);
    });

    // go to controller & run the home function
    Route::get('/container2', 'PagesController@home');
// ---------END BASIC CONTAINER PRATICE----------