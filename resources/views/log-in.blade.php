<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('log')}}" method="GET">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password">
        <button type="submit">Log-In</button>
    </form>
</body>
</html>
