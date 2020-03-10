<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/posts/{post}', 'PostsController@show');