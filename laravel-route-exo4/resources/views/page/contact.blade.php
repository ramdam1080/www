<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>con</h1>
    <p>bonjour {{ $nom }} {{ $prenom }} a tu {{ $age }}?</p>
    <nav>
        <a href="{{ url('/pages/inconu/inconnu/inconnu') }}">contact</a>
        <a href="{{ url('/pages/inconu') }}">about</a>
    </nav>

</body>

</html>
