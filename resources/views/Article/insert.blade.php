@extends('layouts.ArticleTemplete')

@section('title', 'INSERT')

@section('main')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="insert" method="post">
        {{ csrf_field() }}
        <p>title</p>
        <input type="text" name="title" value="{{old('title')}}">
        <p>p_id</p>
        <select name="p_id">
            <option value="null">選択してください</option>
            <option value="1" >PHP</option>
            <option value="2">Laravel</option>
        </select>
        <p>本文</p>
        <textarea name="body" value="{{old('body')}}"></textarea>
        <p>サンプルコード</p>
        <textarea name="body_code" value="{{old('body_code')}}"></textarea>
        <input type="submit" value="send">
    </form>
@endsection

