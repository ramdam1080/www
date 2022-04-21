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
    <div class="container">
        
        <form enctype="multipart/form-data" action="{{ route("user.update",$user->id) }}" method="post">
            @csrf
            <img class="my-5" width="250px" src="{{ Storage::url($user->img) }}" alt="">
            <br>
            <label for="img">change</label>
            <input type="file" id="img" name="img" value="{{ $user->img }}">
            <label for="nom">nom</label>
            <input type="text" id="nom" name="nom" value="{{ $user->nom }}">
            <button type="submit">go</button>
            
        </form>
    </div>
        
    </body>
    </html>
    