<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function addArticle()
    {
        return view('add');
    }

    public function saveArticle(Request $request)
    {
        $article = new Article();
        $article->user_id = 1;
        $article->title = $request->get('title');
        $article->description = $request->get('description');
        $article->save();

        return redirect()->back();
    }

    public function viewArticle()
    {
        $articles = Article::all();

        return view('view', compact('articles'));
    }
}
