@extends('layout.app')
@section('content')
    <h1>Editing:</h1>
    <form method="post" action="/product/{{$Product->id}}">
        @csrf
        <table>
            <td><input type="hidden" value="PATCH" name="_method"></td>
            <tr>
                <td>عنوان</td>
                <td><input type="text" name="title" placeholder="عنوان مطلب" value="{{$Product->title}}"></td>
            </tr>
            <tr>
                <td>توضیحات:</td>
                <td><input type="text" name="des" placeholder="توضیحات" value="{{$Product->description}}"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="btn" value="به روز رسانی">
                </td>
            </tr>
        </table>
    </form>
    <form action="/product/{{$Product->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="حذف" name="btn2">
    </form>
    <form action="/product/{{$Product->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="GET">
        <input type="submit" value="نمایش جزِییات" name="btn2">
    </form>
@endsection
