@extends('layouts.ArticleTemplete')

@section('title', 'VIEW')

@section('main')
    <table>
        <tr><th>TITLE</th><th>CREATED_AT</th></tr>
        @foreach ($articles as $article)
            <tr>
                <td><a href="/content?id={{$article->id}}">{{$article->title}}</a></td>
                <!-- ↑記事詳細へのリンクを貼る -->
            <td>{{$article->created_at}}</td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/edit">編集画面へ</a>
@endsection