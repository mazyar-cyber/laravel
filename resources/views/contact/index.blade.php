@extends('layout.app')
@section("content")
    <ul>
        @foreach($contact as $c)
            <li><a href="{{route('contact.show',$c->id)}}">{{$c->name}}</a></li>
            <li>{{$c->user_id}}</li>
            <br>
        @endforeach
    </ul>
@endsection
