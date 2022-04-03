@extends('back/layouts/app')


@section('content')
    <h1 class="text-center mt-5">joueur</h1>
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
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">age</th>
                    <th scope="col">telephone</th>
                    <th scope="col">email</th>
                    <th scope="col">genre</th>
                    <th scope="col">origine</th>
                    <th scope="col">role</th>
                    <th scope="col">button</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($joueur as $item)
                    <tr>

                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prenom }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->telephone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->genre }}</td>
                        <td>{{ $item->origine }}</td>
                        <td>{{ $item->role->nom }}</td>

                            <td class="d-flex gap-2">
                                <form action="{{ route("joueur.destroy",$item->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="bg-danger p-1" type="submit">delete</button>
                                </form>
                                <a href="{{ route("joueur.edit",$item->id) }}" class="btn btn-primary p-1">edit</a>
                                <a href="{{ route("joueur.show",$item->id) }}" class="btn btn-secondary">show</a>
                                
                            </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
        <a href="{{ route("joueur.create") }}" class="btn btn-warning text-center">create</a>
    </div>
@endsection
