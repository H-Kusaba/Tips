<?php

namespace App\Http\Controllers;
use Illuminate\Support\facades\DB;
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
}
