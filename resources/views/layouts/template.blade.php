<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="Icon" href="{{ asset('images/favicon.ico') }}" type="image/icon">
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    @yield('content')
    <script src="{{ asset('js/main.js') }}" type="text/javascript"></script> 
</body>
</html>