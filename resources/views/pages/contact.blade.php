@extends('layout.app')
@section('content')
    <ul>
        @foreach($people as $person=>$key)
        <li>{{$key}}</li>
        @endforeach
    </ul>
@endsection
