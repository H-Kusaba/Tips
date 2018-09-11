@extends('layouts.ArticleTemplete')

@section('title', 'UPDATE')

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
        <p>タイトル</p>
            <input type="text" name="title" value="{{$form->title}}">
            <!-- DBのデータとoldが競合する場合どうするか -->
        <p>カテゴリー</p>
        <select name="p_id">
            <option value="null">選択してください</option>
            <option value="1" {{ $form->p_id == 1 ? "selected" : "" }}>PHP</option>
            <option value="2" {{ $form->p_id == 2 ? "selected" : "" }}>Laravel</option>
        </select>
        <p>本文</p>
        <textarea name="body">{{$form->body}}</textarea>
        <p>サンプルコード</p>
        <textarea name="body_code">{{$form->body_code}}</textarea>
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="hidden" name="update" value="UPDATE">
        <br>
        <input type="submit" value="送信">
        <br>
        <br>
        <a class="button" href="/update" >戻る</a>
        
    </form>

@endsection