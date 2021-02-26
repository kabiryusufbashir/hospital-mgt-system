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
    <script type="text/javascript">
        // User caret 
        const user_caret = document.querySelector("#user_caret");
        const user_caret_menu = document.querySelector("#user_caret_menu");

        user_caret.addEventListener('click', ()=>{
            if(user_caret_menu.classList.contains('hidden')){
                user_caret_menu.classList.remove('hidden');
            }else{
                user_caret_menu.classList.add('hidden');
            }
        });
    </script> 
</body>
</html>