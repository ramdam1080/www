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

        <form method="POST" action="{{ route("voiture.update",$voiture->id) }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">marque</label>
          <input value="{{ $voiture->marque }}" type="text" class="form-control" name="marque" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">anne</label>
            <input type="text" class="form-control" value="{{ $voiture->anne }}" name="anne" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">couleur</label>
            <input type="text" class="form-control"  name="couleur" value="{{ $voiture->couleur }}" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">prix</label>
            <input type="text" class="form-control" value="{{ $voiture->prix }}" name="prix" id="exampleInputPassword1">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">reduction</label>
            <input type="text" class="form-control" value="{{ $voiture->reduc }}" name="reduc" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
      <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>