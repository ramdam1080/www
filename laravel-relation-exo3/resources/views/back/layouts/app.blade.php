<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
    <nav class="nav bg-black d-flex justify-content-center">
        <ul class="d-flex gap-5">
            <li class="pe-5" style="border-right: solid 2px lightgray">
                <a style="text-decoration: none; list-style: none; font-size: 80px;" href="/equipe" class="text-white">equipe</a>
        </li>
        <li>
            <a style="text-decoration: none; list-style: none; font-size: 80px;" href="/joueur" class="text-white">joueur</a>
    </li>
        </ul>
    </nav>
        @yield('content')
</body>
</html>