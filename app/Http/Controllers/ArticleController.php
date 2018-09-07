<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
    $items = Article::all();
    return view('Article.example', ['items' => $items]);
    }

    public function find(Request $reauest)
    {
        return view('Article.find', ['input' => '']);
    }
    
    public function search(Request $request)
    {
        $item = Article::IdEqual($request->input)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('Article.find', $param);
    }

    //記事の新規追加
    public function insert(Request $request)
    {
        return view('Article.insert');
    }
    public function create(ArticleRequest $request)
    {
        $this->validate($request, Article::$rules);
        $article = new Article;
        $form = $request->all();
        unset($form['_token']);
        $article->fill($form)->save();
        return redirect('view');
    }
    //確認画面
    public function confirm(ArticleRequest $request)
    {
        $data = $request->all();
        return view('Article.confirm', ['data' => $data]);
    }
    public function finish(Request $request)
    {
        return view('Article.finish');
    }
    //記事の更新
    public function updateSet(Request $request)
    {
        $article = Article::find($request->id);
        return view('Article.update', ['form' => $article]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Article::$rules);
        $article = Article::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $article->fill($form)->save();
        return view('Article.finish');
    }
}
?>