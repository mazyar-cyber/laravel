@extends('layout.app')
@section('content')
    @if ($errors->any())
        @foreach($errors->all() as $e)
            <div class="alert alert-warning">{{$e}}</div>
        @endforeach
    @endif
    <h1>اضافه کردن محصول</h1>
    {!! Form::open(['action' => 'ProductController@store', 'method' => 'post','files'=>true]) !!}
    {!! Form::label('title', 'عنوان', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::label('des', 'توضیحات', ['class' => 'control-label']) !!}
    {!! Form::text('des', null, ['class' => 'form-control']) !!}
    {!! Form::label('time', 'زمان', ['class' => 'control-label']) !!}
    {!! Form::date('time', null, ['class' => 'form-control']) !!}
    {!! Form::label('photo', 'عکس', ['class' => 'control-label']) !!}
    {!! Form::file('photo',['class'=>'form-control']) !!}
    {!! Form::submit('ذخیره', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@endsection
