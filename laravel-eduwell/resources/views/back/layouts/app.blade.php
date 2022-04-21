<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <link rel='stylesheet' href='{{ asset('css/app.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/nav.css') }}'>
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    @include('back/partials/navlink')
    <section class="home-section">
        <div class="container"> 
            
            <div class="text p-0">Dashboard</div>
            <p class="fw-bold p-3 fs-3 p-0">Bienvenue dans le back-office</p>
            
            @yield('content-back')
      
    
          {{-- @include('back/banners.all') --}}
        </div>
      </section>
    
    <script src='{{ asset('js/app.js') }}'></script>
    <script src='{{ asset('js/nav.js') }}'></script>
</body>
</html>
