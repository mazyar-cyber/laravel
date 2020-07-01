@extends('layout.app')
@section('content')
    @if ($errors->any())
        @foreach($errors->all() as $e)
            <div class="alert alert-warning">
                {{$e}}
            </div>
        @endforeach
    @endif
    <form action="/basket/{{$basket->id}}" method="post">
        @csrf
        <table>
            <td><input type="hidden" name="_method" value="PATCH"></td>
            <tr>
                <td>:نام</td>
                <td><input type="text" name="name" placeholder="enter your name" value="{{$basket->text}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="به روز رسانی"></td>
            </tr>
        </table>
    </form>
    <form action="/basket/{{$basket->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" name="btn2" value="حذف">
    </form>
@endsection
