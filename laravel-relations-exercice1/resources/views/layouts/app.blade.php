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
    <header>
        <nav class="nav text-white bg-dark d-flex justify-content-center">
            <ul class="d-flex  gap-5">
                <li><a href="/user">user</a></li>
                <li><a href="/role">role</a></li>
            </ul>
        </nav>
</header>

    @yield('content')
</body>
</html>