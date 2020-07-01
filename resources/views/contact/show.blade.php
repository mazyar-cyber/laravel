@extends('layout.app')
@section('content')
    <h1>{{$contact->name}}</h1>
    <h2>{{$contact->lastName}}</h2>
    <h3>{{$contact->password}}</h3>
    <img src="{{$contact->path}}" alt="PIC" width="500px">
    <a href="/contact/{{$contact->id}}/edit">edit</a>
@endsection
