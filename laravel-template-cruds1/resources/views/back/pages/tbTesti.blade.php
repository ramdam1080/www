@extends('back/layouts/app')
@extends('back/partials/nav')


@section('content')
    @section('nav')
        <h1 class="text-danger text-center py-5">Le Testimonial</h1>
        <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">titre</th>
                <th scope="col">sous-titre</th>
                <th scope="col">text</th>
                <th scope="col">cruds</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($testi as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->titre}}</td>
                <td>{{$item->sousTitre}}</td>
                <td>{{$item->text}}</td>
                <td class="d-flex">
                    <form action="{{ route("testi.destroy",$item->id) }}" method="post">
                        @csrf
                        <button class="mx-2 p-2 border-0 bg-danger" type="submit">delete</button>
                    </form>
                    <a class="btn btn-primary  " href="{{ route("testi.edit",$item->id) }}">edit</a>
                </td>
                </tr>
                    
                @endforeach
                
            </tbody>
          </table>
        </div>
    @endsection
@endsection