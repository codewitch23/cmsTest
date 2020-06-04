<?php

use App\Article;

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
//    route model binding
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function index()
    {

        $articles = Article::take(3)->latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {

        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

//        $article=new Article();
//        $article->title=request('title');
//        $article->excerpt=request('excerpt');
//        $article->body=request('body');
//        $article->save();
        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));
        return redirect($article->path());
    }

    public function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }
}
