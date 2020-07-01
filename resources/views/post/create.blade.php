@extends('layout.app')
@section('content')
    @if ($errors->any())
        @foreach($errors->all() as $e)
            <div class="alert alert-warning">{{$e}}</div>
        @endforeach
    @endif
    {!! Form::open(['action' => 'PostController@store', 'method' => 'post','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title', 'عنوان', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control','placeholder'=>'عنوان مطلب']) !!}
        {!! Form::label('content', 'توضیحات', ['class' => 'control-label']) !!}
        {!! Form::text('des', null, ['class' => 'form-control','placeholder'=>'توضیحات مطلب']) !!}
        {!! Form::label('file', 'عکس', ['class' => 'control-label']) !!}
        {!! Form::file('pic',['class'=>'form-control']) !!}
        {!! Form::submit('ذخیره', ['class' => 'btn btn-success','name'=>'btn']) !!}
    </div>
    {!! Form::close() !!}
    {{--        <form method="post" action="/posts">--}}
    {{--            @csrf--}}
    {{--            <table>--}}
    {{--                <tr>--}}
    {{--                    <td>عنوان</td>--}}
    {{--                    <td><input type="text" name="title" placeholder="عنوان مطلب"></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td>توضیحات:</td>--}}
    {{--                    <td><input type="text" name="content" placeholder="توضیحات"></td>--}}
    {{--                </tr>--}}
    {{--                <tr>--}}
    {{--                    <td>--}}
    {{--                        <input type="submit" name="btn" value="ارسال">--}}
    {{--                    </td>--}}
    {{--                </tr>--}}
    {{--            </table>--}}
    {{--        </form>--}}
@endsection
