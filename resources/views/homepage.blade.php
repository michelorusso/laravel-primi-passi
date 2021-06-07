<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel-primi-passi</title>

</head>
<body>

    <h1>{{ $title }}</h1>

    <p>let's start with <b>{{ $framework }}</b></p>

    <ul>
        <li><a href="{{route("laravel")}}">Laravel World</a></li>
        <li><a href="{{route("php")}}">PHP World</a></li>
    </ul>
    
</body>
</html>