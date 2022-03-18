<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body class="bg-secondary">
    
    <h1 class="text-center text-white"> show</h1>
    <div class="container"> 
        
        <div style=" background-color:rgba(5, 5, 5, 0.842);border:white solid 5px; box-shadow: 5px 5px 5px 5px gray" class="text-white text-center my-5  rounded-circle py-4">
            <h5>nom:</h5>
            <p>{{ $user->nom }}</p>
            <h5>prenom:</h5>
            <p>{{ $user->prenom }}</p>
            <h5>email:</h5>
            <p>{{ $user->email }}</p>
            <h5>password:</h5>
            <p>{{ $user->password }}</p>
            <h5>photo de profils:</h5>
            <p>{{ $user->pdp }}</p>
            <h5>role:</h5>
            <p>{{ $user->role }}</p>
            <a href="{{ route("user.index") }}" class="btn btn-primary">retoure</a>
        </div>

    </div>
        
</body>
</html>