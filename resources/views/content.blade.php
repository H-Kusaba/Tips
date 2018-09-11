@extends('layouts.ArticleTemplete')

@section('title', 'CONTENT')

@section('main')
    <p>{{$article->created_at}}</p>
    <h1>{{$article->title}}</h1>
        <span class="image main">
            <img src="{{asset('images/pic13.jpg')}}" alt="" />
            <!-- assetで画像等を参照する際、public直下でないと読み込めない -->
        </span>
    <p>{{$article->body}}</p>
    <pre><code>{{$article->body_code}} </code></pre>
@endsection