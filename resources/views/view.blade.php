@extends('layouts.ArticleTemplete')

@section('title', 'VIEW')

@section('main')
    <table>
        <tr><th>TITLE</th><th>CREATED_AT</th></tr>
        @foreach ($articles as $article)
            <tr>
                <td><a href="#">{{$article->title}}</a></td>
                <!-- ↑記事詳細へのリンクを貼る -->
            <td>{{$article->created_at}}</td>
        </tr>
        @endforeach
    </table>
    <a class="button" href="/Article/public/edit">編集画面へ</a>
@endsection