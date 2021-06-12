<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body  style="background-image: url({{asset('asset/photo-1530099486328-e021101a494a.jpg')}})">
    @yield('body')

    @livewireScripts
</body>
</html>