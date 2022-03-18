@extends('back/layouts/app')

@section('content')
    <h1 class="text-center text-white">Header</h1> 

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
                <th scope="col">icone</th>
                <th scope="col">class</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($header as $item)
            
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{!! $item->icone !!}</td>
                <td> {{ $item->class}}</td>
                <td class="d-flex gap-3"><a href="{{ route("header.edit",$item->id) }}" class="btn btn-primary">edit</a>
                <a href="{{ route("header.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    @endsection
</div>