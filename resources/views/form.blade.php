<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign-up</title>
</head>
<body>
    <form action="{{route("reg")}}" method="post">

        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">sign up</button>
    </form>
</body>
</html>
