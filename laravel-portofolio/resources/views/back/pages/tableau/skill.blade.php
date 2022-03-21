@extends('back/layouts/app')

@section('content')
    <h1 class=" text-white">skill</h1> 

<div class="container text-center">

    @if (session()->has("edit"))
        <div class="alert alert-success text-center">
            {{ session()->get("edit") }}
        </div>
    @endif
    @if (session()->has("destroy"))
        <div class="alert alert-danger text-center">
            {{ session()->get("destroy") }}
        </div>
    @endif
    @if (session()->has("create"))
        <div class="alert alert-warning text-center">
            {{ session()->get("create") }}
        </div>
    @endif
    <table class="table table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Pourcent</th>
                <th scope="col">Value</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($skill as $item)
            
            <tr>
                <th  scope="row">{{ $skill[0]->id }}</th>
                <td >{{ $item->nom }}</td>
                <td >{{ $item->pourcent }}</td>
                <td >{{ $item->value }}</td>
                
                
                <td class="d-flex gap-3 py-5">
                    <form action="{{ route("skill.destroy",$item->id) }}" method="POST">
                        @csrf
                        <button class="bg-danger py-1" type="submit">delete</button>
                    </form>
                    <a href="{{ route("skill.edit",$item->id) }}" class="btn btn-primary">edit</a>
                    <a href="{{ route("skill.show",$item->id) }}" class="btn btn-secondary">show</a>
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    <div class="text-center">

        <a class="btn btn-warning " href="{{ route("skill.create") }}">create</a>
    </div>
    @endsection
</div>