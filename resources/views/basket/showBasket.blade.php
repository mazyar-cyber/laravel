@extends('layout.app')
@section('content')
    <ul>
        @foreach($baskets as $basket)
            <li><a href="{{route("basket.show",$basket->id)}}">{{$basket->text}}</a></li>
            <li>{{$basket->user->name}}</li>
        @endforeach
    </ul>
@endsection
