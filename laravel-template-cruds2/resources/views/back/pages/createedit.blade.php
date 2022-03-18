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
     <h1 class="text-white text-center">Changement</h1>
    <div class="container">
        @if ($errors->any()) 
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route("user.store") }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
          <input  type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prenom</label>
            <input type="text" class="form-control"  name="prenom" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">email</label>
            <input type="text" class="form-control" name="email"  id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">password</label>
            <input type="text" class="form-control"  name="password" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">photo de profils</label>
            <input type="text" class="form-control"  name="pdp" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">role</label>
            <input type="text"  class="form-control" name="role" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
      <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>