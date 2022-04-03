@extends('layouts/app')

@section('content')
    <div class="container my-5">
        @if (session()->has('destroy'))
            <div class="alert alert-danger text-center">
                {{ session()->get("destroy") }}
            </div>
        @endif

        @if (session()->has('edit'))
            <div class="alert alert-success text-center">
                {{ session()->get("edit") }}
            </div>
        @endif
        
        @if (session()->has('create'))
            <div class="alert alert-warning text-center">
                {{ session()->get("create") }}
            </div>
        @endif
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">age</th>
                    <th scope="col">email</th>
                    <th scope="col">mdp</th>
                    <th scope="col">dtn</th>
                    <th scope="col">genre</th>
                    <th scope="col">role</th>
                    <th scope="col">button</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom }}</td>
                        <td>{{ $item->prenom }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->mdp }}</td>
                        <td>{{ $item->dtn }}</td>
                        <td>{{ $item->genre }}</td>
                        {{-- @if ($item->role->nom != null)
                            <td>{{ $item->role->nom }}</td>
                            
                        @endif --}}
                        <td class="d-flex gap-3 py-5">
                            <form action="{{ route('user.destroy',$item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="bg-danger p-1" type="submit">delete</button>
                            </form>
                            <a href="{{ route("user.edit",$item->id) }}" class="btn btn-primary p-1">edit</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="text-center"><a href="{{ route("user.create") }}" class="btn btn-warning">create</a></div>
@endsection
