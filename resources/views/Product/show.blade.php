@extends('layout.app')
@section('content')
    <h1>{{$Product->title}}</h1>
    <h2>{{$Product->description}}</h2>
    <h3>{{$Product->time}}</h3>
    <img src="{{$Product->path}}" alt="pro_pic" width="550px">
@endsection
