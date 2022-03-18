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
    <h1 class="text-center text-white ">User</h1>

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
            <th scope="col">prenom</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">pdp</th>
            <th scope="col">role</th>
            <th scope="col">btn</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            
            <tr>
            <th scope="row">{{ $item->id }} </th>
            <td>{{ $item->nom }}</td>
            <td>{{ $item->prenom }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->pdp }}</td>
            <td>{{ $item->role }}</td>
            <td class="d-flex"> <form action="{{ route("user.destroy",$item->id) }}" method="post">
                @csrf
            <button type="submit" class="bg-danger p-2"> delete</button>
            </form>
            <a class="btn-primary btn p-2" href="{{ route("user.edit",$item->id) }}">edit</a>
            <a class="btn btn-success" href="{{ route("user.show",$item->id) }}">show</a>
        </td>
          </tr>
            @endforeach
        
        </tbody>
      </table>
      <div class="text-center"><a href="{{ route("user.create") }}" class="btn btn-warning p-2"> create</a></div>
    <script src="{{ asset("js/app.js") }}"></script>
</body>
</html>