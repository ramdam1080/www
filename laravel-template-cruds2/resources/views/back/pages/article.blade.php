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
    <h1 class="text-center text-white ">article</h1>

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
            <th scope="col">description</th>
            <th scope="col">auteur</th>
            <th scope="col">date</th>
            <th scope="col">btn</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($article as $item)
            
            <tr>
            <th scope="row">{{ $item->id }} </th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->auteur }}</td>
            <td>{{ $item->date }}</td>
            <td class="d-flex"> <form action="{{ route("article.destroy",$item->id) }}" method="post">
                @csrf
            <button type="submit" class="bg-danger p-2"> delete</button>
            </form>
            <a class="btn-primary btn p-2" href="{{ route("article.edit",$item->id) }}">edit</a>
        </td>
          </tr>
            @endforeach
        
        </tbody>
      </table>
      <div class="text-center"><a href="{{ route("article.create") }}" class="btn btn-warning p-2"> create</a></div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>