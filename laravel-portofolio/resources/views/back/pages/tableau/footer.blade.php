@extends('back/layouts/app')

@section('content')
    <h1 class="text-center text-white">footer</h1> 

<div class="container">

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
    <table class="table table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">text1</th>
                <th scope="col">text2</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($footer as $item)
            
            <tr>
                <th scope="row">{{ $item->id }}</th>
               
                <td>{!! $item->text1 !!}</td>
                <td> {{ $item->text2}}</td>
                <td class="d-flex gap-3">
                    <form action="{{ route("footer.destroy",$item->id) }}" method="POST">
                        @csrf
                        <button class="bg-danger py-1" type="submit">delete</button>
                    </form>
                    <a href="{{ route("footer.edit",$item->id) }}" class="btn btn-primary">edit</a>
                <a href="{{ route("footer.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <div class="text-center">

        <a class="btn btn-warning " href="{{ route("footer.create") }}">create</a>
    </div>
    @endsection
</div>