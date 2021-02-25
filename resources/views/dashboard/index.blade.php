<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    @if(auth()->user())
        Kabir Yusuf Bashir
        <form action="{{route('logout')}}" method="POST">
            @csrf 
            <button type="submit" name="logout">Logout</button>
        </form>
    @else
        Nah!
    @endif
</body>
</html>