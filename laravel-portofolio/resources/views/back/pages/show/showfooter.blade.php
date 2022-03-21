<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
</head>
<body style="background-color: lightgray;">
        <div style="width:70vh; margin: 70px auto; box-shadow: 7px 7px 7px gray;  " class="bg-dark rounded-3 p-5 text-white text-center">
           <h5>text1</h5>
           <p>{{ $footer->text1 }}</p>
           <h5>text2</h5>
           <p>{{ $footer->text2 }}</p>
        </div>

</body>
</html>