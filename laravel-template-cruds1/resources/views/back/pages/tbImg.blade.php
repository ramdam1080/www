@extends('back/layouts/app')
@extends('back/partials/nav')


@section('content')
    @section('nav')
        <h1 class="text-danger text-center py-5">Les img</h1>
        <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">url</th>
                <th scope="col">cruds</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($img as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->url}}</td>
                <td class="d-flex">
                    <form action="{{ route("img.destroy",$item->id) }}" method="post">
                        @csrf
                        <button class="mx-2 p-2 border-0 bg-danger" type="submit">delete</button>
                    </form>
                    <a class="btn btn-primary  " href="{{ route("img.edit",$item->id) }}">edit</a>
                </td>
                </tr>
                    
                @endforeach
                
            </tbody>
          </table>
        </div>
    @endsection
@endsection