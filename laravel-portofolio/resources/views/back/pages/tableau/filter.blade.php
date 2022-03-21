@extends('back/layouts/app')

@section('content')
    <h1 class="text-center text-white">filter</h1> 

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
                <th scope="col">filter</th>
                <th scope="col">class</th>
                <th scope="col">data</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($filter as $item)
            
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td> {{ $item->filter}}</td>
                <td> {{ $item->class}}</td>
                <td> {{ $item->data}}</td>
                <td class="d-flex gap-3">
                    <form action="{{ route("filter.destroy",$item->id) }}" method="POST">
                        @csrf
                        <button class="bg-danger py-1" type="submit">delete</button>
                    </form>
                    <a href="{{ route("filter.edit",$item->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route("filter.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <div class="text-center">

        <a class="btn btn-warning " href="{{ route("filter.create") }}">create</a>
    </div>
    @endsection
</div>