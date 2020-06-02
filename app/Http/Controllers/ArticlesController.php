<?php
use App\Article;
namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article=Article::find($id);
        return view('articles.show',['article'=>$article]);
    }
    public function index()
    {

        $articles=Article::take(3)->latest()->get();
        return view('articles.index',['articles'=>$articles]);
    }
    public function create()
    {
        return view('articles.create');
    }

}
