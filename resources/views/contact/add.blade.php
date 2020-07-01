@extends('layout.app')
@section('content')
    @if ($errors)
        <div>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        </div>
    @endif
    {!! Form::open(['action' => 'ContactController@store', 'method' => 'post','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('name', 'name', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('lastname', 'LastName', ['class' => 'control-label']) !!}
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
        {!! Form::label('pic', 'تصویر', ['class' => 'control-label']) !!}
        {!! Form::file('pic',['class'=>'form-control']) !!}
        {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
    {{--    <form action="/contact" method="post">--}}
    {{--        @csrf--}}
    {{--        <table>--}}
    {{--            <tr>--}}
    {{--                <td>name</td>--}}
    {{--                <td><input type="text" name="name"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td>lastname</td>--}}
    {{--                <td><input type="text" name="lastname"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td>password</td>--}}
    {{--                <td><input type="password" name="password"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td><input type="submit" value="send"></td>--}}
    {{--            </tr>--}}
    {{--        </table>--}}
    {{--    </form>--}}
@endsection
