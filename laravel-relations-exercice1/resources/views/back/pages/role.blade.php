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
                    <th scope="col">button</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($role as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->nom }}</td>
                 
                        <td class="d-flex gap-3 py-5">
                            <form action="{{ route('role.destroy',$item->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="bg-danger p-1" type="submit">delete</button>
                            </form>
                            <a href="{{ route("role.edit",$item->id) }}" class="btn btn-primary p-1">edit</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="text-center"><a href="{{ route("role.create") }}" class="btn btn-warning">create</a></div>
@endsection
