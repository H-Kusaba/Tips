@extends('layouts.ArticleTemplete')

@section('title', 'CONTENT')

@section('main')
    <p>{{$article->created_at}}</p>
    <h1>{{$article->title}}</h1>
        <!--span class="image main">
            <img src="images/pic13.jpg" alt="" />
        </span-->
    <p>{{$article->body}}</p>
    <pre><code>{{$article->body_code}} </code></pre>
@endsection