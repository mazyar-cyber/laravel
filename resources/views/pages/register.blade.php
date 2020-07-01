@extends('layout.app')

@section('footer')
    <fieldset>
        <legend>{{$name}}</legend>
        <form action="">
            <input type="text" value="{{$name}}">name
            <input type="text">lastname
            <input type="submit" value="send">
        </form>
    </fieldset>
@endsection
