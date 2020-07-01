@extends('layout.app')
@section('content')
    <h1><a>{{$post->name}}</a></h1>
    <h3>{{$post->lastname}}</h3>
    <img src="{{$post->path}}" alt="pic" width="300px">
    <a href="{{route('posts.edit',$post->id)}}">ویرایش</a>
@endsection
