@extends('back/layouts/app')
@extends('back/partials/nav')


@section('content')
    @section('nav')
        <h1 class="text-danger text-center py-5">Busines et projets</h1>
        <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Sous-titre</th>
                <th scope="col">Titre</th>
                <th scope="col">text</th>
                <th scope="col">text2</th>
                <th scope="col">lien</th>
                <th scope="col">cruds</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($section as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->sousTitre}}</td>
                <td>{{$item->titre}}</td>
                <td>{{$item->text}}</td>
                <td>{{$item->text2}}</td>
                <td>{{$item->lien}}</td>
                <td class="d-flex">
                    <form action="{{ route("section.destroy",$item->id) }}" method="post">
                      @csrf
                        <button class="mx-2 p-2 border-0 bg-danger" type="submit">delete</button>
                    </form>
                    <a class="btn btn-primary  " href="{{ route("section.edit",$item->id) }}">edit</a>
                </td>
                </tr>
                    
                @endforeach
                
            </tbody>
          </table>
        </div>
    @endsection
@endsection