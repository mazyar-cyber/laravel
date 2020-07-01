@extends('layout.app')
@section('content')
    <h1>به صفحه ویو خوش آمدید</h1>
    <h3>آیدی برابر با : {{$id}}</h3>
    <h3>نام برابر با : {{$name}}</h3>
@endsection
@section('footer')
    <h2>{{$id=$name}}</h2>
@endsection

