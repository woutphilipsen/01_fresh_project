<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
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
    }
}