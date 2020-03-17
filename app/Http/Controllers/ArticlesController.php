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
        return view('articles.create');
    }
    
    // persist the resource to database
    public function store()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
        
        $article = new Article();
        
        // TODO: claen this pile up
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }
    
    // show a view to edit an existing resource
    public function edit($id)
    {
        $article = Article::find($id);
        return view ('articles.edit', compact('article'));
    }
    
    // persist the edited resource
    public function update($id)
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);

        // TODO: claen this pile up
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
    
        $article->save();

        return redirect('/articles/' . $article->id);
    }
    
    // delete the resource 
    public function destroy()
    {

    }

}
