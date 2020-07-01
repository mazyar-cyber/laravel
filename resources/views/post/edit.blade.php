@extends('layout.app')
@section('content')
    <h1>ویرایش فرم</h1>
    @can('update',$post)
        {!! Form::model($post,['method' => 'PATCH','action' => ['PostController@update',$post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'عنوان', ['class' => 'control-label']) !!}
            {!! Form::text('title', $post->name, ['class' => 'form-control','placeholder'=>'عنوان مطلب']) !!}
            {!! Form::label('content', 'توضیحات', ['class' => 'control-label']) !!}
            {!! Form::text('des', $post->lastname, ['class' => 'form-control','placeholder'=>'توضیحات مطلب']) !!}
            {!! Form::submit('ویرایش', ['class' => 'btn btn-warning','name'=>'btn']) !!}
        </div>
        {!! Form::close() !!}
        {!! Form::model($post, ['action' => ['PostController@destroy', $post->id], 'method' => 'DELETE']) !!}
        <div class="form-group">
            {!! Form::submit('حذف', ['class' => 'btn btn-danger','name'=>'btn2']) !!}
        </div>
        {!! Form::close() !!}
    @endcan

    {{--    <form method="post" action="/posts/{{$post->id}}">--}}
    {{--        @csrf--}}
    {{--        <table>--}}
    {{--            <td><input type="hidden" name="_method" value="PATCH"></td>--}}
    {{--            <tr>--}}
    {{--                <td>عنوان</td>--}}
    {{--                <td><input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->name}}"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td>توضیحات:</td>--}}
    {{--                <td><input type="text" name="content" placeholder="توضیحات" value="{{$post->lastname}}"></td>--}}
    {{--            </tr>--}}
    {{--            <tr>--}}
    {{--                <td>--}}
    {{--                    <input type="submit" name="btn" value="به روزرسانی">--}}
    {{--                </td>--}}
    {{--            </tr>--}}
    {{--        </table>--}}
    {{--        <form action="/posts/{{$post->id}}" method="post">--}}
    {{--            <input type="hidden" name="_method" value="DELETE">--}}
    {{--            <input type="submit" value="حذف" name="btn2">--}}
    {{--        </form>--}}
    {{--    </form>--}}
@endsection
