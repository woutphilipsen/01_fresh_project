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
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    // shows a view to create a new resource
    public function create()
    {
        return view('articles.create');
    }
    
    // persist the resource to database
    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }
    
    // show a view to edit an existing resource
    public function edit(Article $article)
    {
        return view ('articles.edit', compact('article'));
    }
    
    // persist the edited resource
    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }
    
    // delete the resource 
    public function destroy()
    {

    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]); 
    }

}
