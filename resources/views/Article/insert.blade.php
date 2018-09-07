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
    <form action="confirm" method="post">
        {{ csrf_field() }}
        <p>title</p>
        <input type="text" name="title" value="{{old('title')}}">
        <p>p_id</p>
        <select name="p_id">
            <option value="null">選択してください</option>
            <option value="1" @if(old('p_id') == 1) selected @endif>PHP</option>
            <option value="2" @if(old('p_id') == 2) selected @endif>Laravel</option>
        </select>
        <p>本文</p>
        <textarea name="body">{{old('body')}}</textarea>
        <p>サンプルコード</p>
        <textarea name="body_code">{{old('body_code')}}</textarea>
        <input type="hidden" name="create" value="新規作成">
        <input type="hidden" name="id" value="新規作成">
        <input type="submit" value="send">
    </form>
@endsection

