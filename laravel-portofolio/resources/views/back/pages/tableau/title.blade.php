@extends('back/layouts/app')

@section('content')
    <h1 class="text-center text-white">Title</h1> 

<div class="container">

    @if (session()->has("edit"))
        <div class="alert alert-success text-center">
            {{ session()->get("edit") }}
        </div>
    @endif
    <table class="table table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">descritpion</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($title as $item)
            
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{!! $item->title !!}</td>
                <td> {{ $item->description }}</td>
                <td class="d-flex gap-3 py-5">
                    <a href="{{ route("title.edit",$item->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route("title.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    @endsection
</div>