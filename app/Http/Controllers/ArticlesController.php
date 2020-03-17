<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // render a list of a resource
    public function index() 
    {
        $articles = Article::latest()->get();
        
        return view('articles.index', ['articles' => $articles]);
    }

    // show a single resource
    public function show($id)
    {
        
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    // shows a view to create a new resource
    public function create()
    {

    }
    
    // persist the resource to database
    public function store()
    {

    }
    
    // show a view to edit an existing resource
    public function edit()
    {

    }
    
    // persist the edited resource
    public function update()
    {

    }
    
    // delete the resource 
    public function destroy()
    {

    }

}
