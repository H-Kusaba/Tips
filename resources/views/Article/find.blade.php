@extends('layouts.ArticleTemplete')

@section('title', 'FIND')

@section('main')
    <form action="" method="post">
    {{ csrf_field() }}
    <input type="text" name="input" value="{{$input}}">
    <input type="submit" value="find">
    </form>
    @if (isset($item))
    <a href="#">{{$item->getData()}}</a>
    @endif
@endsection