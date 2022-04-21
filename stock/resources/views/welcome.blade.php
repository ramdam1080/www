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
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img width="152px" src="{{ Storage::url($user[0]->img) }}" alt=""></td>
            <td>{{ $user[0]->nom }}</td>
            <td><a href="{{ route("user.edit",$user[0]->id) }}" class="btn btn-primary">edit</a></td>
          </tr>

        </tbody>
      </table>
</body>
</html>