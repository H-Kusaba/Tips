@extends('layouts.ArticleTemplete')

@section('title', 'CONFIRM')

@section('main')
    <form action="finish" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <th>ID</th>
                </tr>
                <tr>
                    <td>{{$data['id']}}</td>
                </tr>
                <tr>
                    <th>タイトル</th>
                </tr>
                <tr>
                    <td>{{$data['title']}}</td>
                </tr>
                <tr>
                    <th>p_id</th>
                </tr>
                <tr>
                    <td>{{$data['p_id']}}</td>
                </tr>
                <tr>
                    <th>本文</th>
                </tr>
                <tr>
                    <td>{{$data['body']}}</td>
                </tr>
                <tr>
                    <th>サンプルコード</th>
                </tr>
                <tr>
                    <td>{{$data['body_code']}}</td>
                </tr>
                <input type="hidden" name="id" value="{{$data['id']}}">
                <input type="hidden" name="title" value="{{$data['title']}}">
                <input type="hidden" name="p_id" value="{{$data['p_id']}}">
                <input type="hidden" name="body" value="{{$data['body']}}">
                <input type="hidden" name="body_code" value="{{$data['body_code']}}">
                <input type="hidden" name="create" value="@if(isset($data['create'])) create @endif">
                <input type="hidden" name="update" value="@if(isset($data['update'])) update @endif">
            <table>
        <input type="submit" value="send">
    </form>
@endsection
