@extends('layouts.ArticleTemplete')

@section('title', 'EDIT')

@section('main')
<p>更新する記事のタイトル、もしくは、新規作成ボタンをクリック</p>
    <table>
        <tr><th>TITLE</th><th>CREATED_AT</th></tr>
        @foreach ($articles as $article)
            <tr>
                <td><a href="/Article/public/update?id={{$article->id}}">{{$article->title}}</a></td>
            <td>{{$article->created_at}}</td>
        </tr>
        @endforeach
    </table>

<a class="button" href="/Article/public/view">戻る</a>
<a class="button" href="/Article/public/insert">新規作成</a>
@endsection