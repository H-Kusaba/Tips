<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleViewController extends Controller
{
    public function viewAll()
    {
        $articles = Article::all();
        return view('view', ['articles' => $articles]);
        //bladeのリンク先を記事詳細に変更する
    }

    public function content(Request $request)
    {
        $article = Article::find($request->id);
        return view('content', ['article' => $article]);
    }
}
