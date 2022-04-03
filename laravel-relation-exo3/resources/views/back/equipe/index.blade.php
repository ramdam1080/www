@extends('back/layouts/app')


@section('content')
    <h1 class="text-center mt-5">equipe</h1>
    <div class="container my-5">
        @if (session()->has("destroy"))
            <div class="alert alert-danger">
                {{ session()->get("destroy") }}
            </div>
        @endif
        @if (session()->has("edit"))
        <div class="alert alert-success">
            {{ session()->get("edit") }}
        </div>
    @endif
    @if (session()->has("create"))
        <div class="alert alert-warning">
            {{ session()->get("create") }}
        </div>
    @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">equipe</th>
                    <th scope="col">ville</th>
                    <th scope="col">pays</th>
                    @foreach ($roles as $item)
                        <th scope="col">{{ $item->nom }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($equipe as $item)
                    <tr>

                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->ville }}</td>
                        <td>{{ $item->pays }}</td>

                        @foreach ($roles as $item2)
                            <td>
                                {{ count($item->joueur->where('role_id', $item2->id)) }} / {{ $item2->max }} 
                            </td>
                        @endforeach
                            <td class="d-flex gap-2">
                                <form action="{{ route("equipe.destroy",$item->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="bg-danger p-1" type="submit">delete</button>
                                </form>
                                <a href="{{ route("equipe.edit",$item->id) }}" class="btn btn-primary p-1">edit</a>
                                <a href="{{ route("equipe.show",$item->id) }}" class="btn btn-secondary">show</a>
                                
                            </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <a href="{{ route("equipe.create") }}" class="btn btn-warning text-center">create</a>
    </div>
@endsection
