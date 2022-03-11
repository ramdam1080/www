@extends('back/layouts/app')
@extends('back/partials/nav')


@section('content')
    @section('nav')
        <h1 class="text-danger text-center py-5">Le contact</h1>
        <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">titre</th>
                <th scope="col">sous-titre</th>
                <th scope="col">bouton</th>
                <th scope="col">cruds</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($contact as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>
                <td>{{$item->btn}}</td>
                <td class="d-flex">
                    <form action="{{ route("contact.destroy",$item->id) }}" method="post">
                        @csrf
                        <button class="mx-2 p-2 border-0 bg-danger" type="submit">delete</button>
                    </form>
                    <a class="btn btn-primary  " href="{{ route("contact.edit",$item->id) }}">edit</a>
                </td>
                </tr>
                    
                @endforeach
                
            </tbody>
          </table>
        </div>
    @endsection
@endsection