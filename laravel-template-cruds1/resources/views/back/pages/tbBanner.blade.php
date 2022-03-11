@extends('back/layouts/app')
@extends('back/partials/nav')


@section('content')
    @section('nav')
        <h1 class="text-danger text-center py-5">Le Banner</h1>
        <div class="container">
        <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">text</th>
                <th scope="col">cruds</th>
               
              </tr>
            </thead>
            <tbody>
                @foreach ($banner as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->text}}</td>
                <td class="d-flex">
                    <form action="{{ route("banner.destroy",$item->id) }}" method="post">
                        @csrf
                        <button class="mx-2 p-2 border-0 bg-danger" type="submit">delete</button>
                    </form>
                    <a class="btn btn-primary  " href="{{ route("banner.edit",$item->id) }}">edit</a>
                </td>
                </tr>
                    
                @endforeach
                
            </tbody>
          </table>
        </div>
    @endsection
@endsection