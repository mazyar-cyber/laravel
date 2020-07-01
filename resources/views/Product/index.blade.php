@extends('layout.app')
@section('content')
    <h2>list of product</h2>
    <ul>
        @foreach($Products as $p)
            <li><a href="{{route('product.edit',$p->id)}}">{{$p->title}}</a></li>
            <li>{{$p->user->name}}</li>
            <br>
        @endforeach
    </ul>
@endsection
