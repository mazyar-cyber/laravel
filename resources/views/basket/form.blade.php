@extends('layout.app')
@section('content')
    @if ($errors->any)
        @foreach($errors->all() as $e)
            <div class="alert alert-warning">{{$e}}</div>
        @endforeach
    @endif
    <form action="/basket" method="post">
        @csrf
        <table>
            <tr>
                <td>:نام</td>
                <td><input type="text" name="name" placeholder="enter your name"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btn" value="ارسال"></td>
            </tr>
        </table>
    </form>
@endsection
