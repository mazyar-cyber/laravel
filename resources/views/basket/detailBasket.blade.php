@extends('layout.app')
@section('content')
    <h1>{{$basket->text}}</h1>
    <h3>{{$basket->email}}</h3>
    <a href="{{route('basket.edit',$basket->id)}}">edit</a>
@endsection
