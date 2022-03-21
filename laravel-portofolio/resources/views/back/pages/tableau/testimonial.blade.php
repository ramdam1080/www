@extends('back/layouts/app')

@section('content')
    <h1 class=" text-white">testimonial</h1> 

<div class="container text-center">
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
    @if (session()->has("destroy"))
        <div class="alert alert-danger text-center">
            {{ session()->get("destroy") }}
        </div>
    @endif
    <table class="table  table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">image</th>
                <th scope="col">paragraphe</th>
                <th scope="col">h3</th>
                <th scope="col">h4</th>
                <th scope="col">data</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonial as $item)
            
            <tr>
                <th  scope="row">{{ $item->id }}</th>
                <td >  <img width="100px"  src="{{ asset("img/" . $item->img) }}" alt=""></td>
                <td>{{ $item->paragraphe }}</td>
                <td>{{ $item->h3}}</td>
                <td>{{ $item->h4}}</td>   
                <td>{{ $item->data}}</td>   
                
                <td class="d-flex gap-3 py-5">
                    <form action="{{ route("testimonial.destroy",$item->id) }}" method="POST">
                        @csrf
                        <button class="bg-danger py-1" type="submit">delete</button>
                    </form>
                    <a href="{{ route("testimonial.edit",$item->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route("testimonial.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <div class="text-center">

        <a class="btn btn-warning " href="{{ route("testimonial.create") }}">create</a>
    </div>
    @endsection
</div>