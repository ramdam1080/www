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
    <h1 class="text-center text-white ">equipe</h1>

    @if (session()->has("destroy"))
        <div class="alert alert-danger text-center">
            {{ session()->get("destroy") }}
        </div>
    @endif
    @if (session()->has("edit"))
        <div class="alert alert-success text-center">
            {{ session()->get("edit") }}
        </div>
    @endif
    @if (session()->has("create"))
        <div class="alert alert-warning text-center">
            {{ session()->get("create") }}
        </div>
    @endif
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">nombre</th>
            <th scope="col">entraineur</th>
            <th scope="col">poste</th>
            
            <th scope="col">btn</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($equipe as $item)
            
            <tr>
            <th scope="row">{{ $item->id }} </th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->nombre }}</td>
            <td>{{ $item->entraineur }}</td>
            <td>{{ $item->poste }}</td>
            <td class="d-flex"> <form action="{{ route("equipe.destroy",$item->id) }}" method="post">
                @csrf
            <button type="submit" class="bg-danger p-2"> delete</button>
            </form>
            <a class="btn-primary btn p-2" href="{{ route("equipe.edit",$item->id) }}">edit</a>
        </td>
          </tr>
            @endforeach
        
        </tbody>
      </table>
      <div class="text-center"><a href="{{ route("equipe.create") }}" class="btn btn-warning p-2"> create</a></div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>