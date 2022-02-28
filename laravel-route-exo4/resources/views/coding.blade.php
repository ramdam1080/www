<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>je suis avec {{ $prenom[3] }}</p>
    <p>et je suis {{ $personne->x }} {{ $personne->y }} et j'ai {{ $personne->z }}</p>
    <h2>majeur:</h2>

    @foreach ($tb as $value)
        @if ($value->z >= 18)
            <p>{{ $value->x }} {{ $value->y }} et il a {{ $value->z }} ans</p>
        @endif
    @endforeach

    <h2>mineur:</h2>
    @foreach ($tb as $value)
    @if ($value->z <= 17)
        <p>{{ $value->x }} {{ $value->y }} et il a {{ $value->z }} ans</p>
    @endif
@endforeach

</body>
</html>