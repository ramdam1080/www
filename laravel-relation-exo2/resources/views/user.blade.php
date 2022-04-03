@extends('layouts/app')

@section('content')
<h1 class="text-center my-5">user</h1>
<div class="container">  
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
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">email</th>
        <th scope="col">nickname</th>
        <th scope="col">name</th>
        <th scope="col">age</th>
        <th scope="col">phone</th>
        <th scope="col">button</th>
    </tr>
</thead>
    <tbody>
        @foreach ($user as $item)
            
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->email }}</td>
            <td>{{ $item->nickname }}</td>
            <td>{{ $item->profil->name }}</td>
            <td>{{ $item->profil->age }}</td>
            <td>{{ $item->profil->phone }}</td>
            <td class="d-flex gap-3">
                <form action="{{ route("user.destroy",$item->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                     <button class="bg-danger p-1" type="submit">delete</button>
                </form>
                    <a href="{{ route("user.edit",$item->id) }}" class="btn btn-primary">edit</a>
            </td>
        </tr>
        
        @endforeach     
    </tbody>
  </table>
    <a href="{{ route("user.create") }}" class="btn btn-warning">create</a>
</div>
@endsection