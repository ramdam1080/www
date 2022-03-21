<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body style="background-color: lightgray;">

        <div style="width:100vh; margin: 70px auto; box-shadow: 7px 7px 7px gray;  " class="bg-dark rounded-3 p-5 text-white text-center">
           <h5>image</h5>
           <img width="200px" height="200px" src="{{ asset("img/" .  $testimonial->img )}}" alt="">
           <h5>paragraphe</h5>
           <p>{!! $testimonial->paragraphe !!}</p>
           <h5>h3</h5>
           <p>{!! $testimonial->h3 !!}</p>
           <h5>h4</h5>
           <p>{!! $testimonial->h4 !!}</p>
           <h5>data</h5>
           <p>{!! $testimonial->data !!}</p>
        </div>

</body>
</html>