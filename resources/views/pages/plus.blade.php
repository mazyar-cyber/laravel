<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body>
<div dir="rtl">
    <h1>به صفحه ویو خوش آمدید</h1>
{{--    <h2>{{$a+$b}}</h2>--}}
    <h2>sum= {{$x + $y}}</h2>
    <h2>cross= {{$x *$y}}</h2>

</div>
</body>
</html>
