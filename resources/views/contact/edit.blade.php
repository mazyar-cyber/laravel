@extends('layout.app')
@section('content')
    <h1>ویرایش</h1>
    @can('update',$contact)
        {!! Form::model($contact,['action' => ['ContactController@update',$contact->id], 'method' => 'PATCH']) !!}
        <div class="form-group">
            {!! Form::label('name', 'name', ['class' => 'control-label']) !!}
            {!! Form::text('name', $contact->name, ['class' => 'form-control']) !!}
            {!! Form::label('lastname', 'LastName', ['class' => 'control-label']) !!}
            {!! Form::text('lastname', $contact->lastName, ['class' => 'form-control']) !!}
            {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            {!! Form::submit('edit', ['class' => 'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::model($contact, ['action' => ['ContactController@destroy', $contact->id], 'method' => 'DELETE']) !!}
        {!!Form::submit('delete', ['class' => 'btn btn-warning','name'=>'btn2']) !!}
        {!! Form::close() !!}
    @endcan

    {{--    <form action="/contact/{{$contact->id}}" method="post">--}}
    {{--        @csrf--}}
    {{--        <table>--}}
    {{--            <td><input type="hidden" name="_method" value="PUT"></td>--}}
    {{--            <tr>--}}
    {{--                <td>name</td>--}}
    {{--                <td><input type="text" name="name" value="{{$contact->name}}"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td>lastname</td>--}}
    {{--                <td><input type="text" name="lastname" value="{{$contact->lastName}}"></td>--}}
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
    {{--    <form action="/contact/{{$contact->id}}" method="post">--}}
    {{--        @csrf--}}
    {{--        <table>--}}
    {{--            <td><input type="hidden" value="DELETE" name="_method"></td>--}}
    {{--            <tr>--}}
    {{--                <td><input type="submit" value="حذف" name="btn2"></td>--}}
    {{--            </tr>--}}
    {{--        </table>--}}
    {{--    </form>--}}
@endsection
