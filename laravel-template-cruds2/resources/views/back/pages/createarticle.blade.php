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

        <form method="POST" action="{{ route("article.store") }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
          <input  type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">description</label>
            <input type="text" class="form-control"  name="description" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">auteur</label>
            <input type="text" class="form-control" name="auteur"  id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">date</label>
            <input type="text" class="form-control"  name="date" id="exampleInputPassword1">
        </div>
        
  
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
      <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>