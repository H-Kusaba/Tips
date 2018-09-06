<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Article;

class ArticleEditController extends Controller
{
    public function viewAll()
    {
        $articles = Article::all();
        return view('edit', ['articles' => $articles]);
        //bladeのリンク先をオートフィルのフォーム画面に遷移させる
    }
    /*
    public function update()
    {
        //hogehoge
        return redirect('/view');
        //フォーム入力し更新した後に、記事一覧へ遷移
    }
    public function insert()
    {
        
    }
    */
}
