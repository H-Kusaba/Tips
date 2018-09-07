@extends('layouts.ArticleTemplete')

@section('title', 'VIEW')

@section('main')
    <!--table>
        <tr><th>TITLE</th><th>CREATED_AT</th></tr>
        @foreach ($articles as $article)
            <tr>
                <td><a href="/content?id={{$article->id}}">{{$article->title}}</a></td>
            <td>{{$article->created_at}}</td>
        </tr>
        @endforeach
    </table-->
    <header>
        <h1>PHP,Laravelの使い方をピンポイントで解説</h1>
        <p>関数やメソッドについて記載していきます。</p>
    </header>
    <section class="tiles">
        @foreach ($articles as $row)
            @if ($row['p_id'] == 1)
                <article class="style6">
                    <span class="image">
                        <img src="{{asset('images/pic06.jpg')}}" alt="" />
                    </span>
            @elseif ($row['p_id'] == 2)
                <article class="style1">
                    <span class="image">
                        <img src="{{asset('images/pic01.jpg')}}" alt="" />
                    </span>
            @endif
                    <a href="/content?id={{$row->id}}">
                            <h2>{{$row->title}}</h2>
                                <div class="content">
                                    <p>{{$row->body}}</p>
                                </div>
                    </a>
                </article>
        @endforeach
    </section>
    <br>
    <br>
    <a class="button" href="/edit">編集画面へ</a>
@endsection