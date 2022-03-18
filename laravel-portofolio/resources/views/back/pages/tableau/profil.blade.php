@extends('back/layouts/app')

@section('content')
    <h1 class=" text-white">profil</h1> 

<div class="container text-center">

    @if (session()->has("edit"))
        <div class="alert alert-success text-center">
            {{ session()->get("edit") }}
        </div>
    @endif
    <table class="table W-50 table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">profils</th>
                <th scope="col">button</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profil as $item)
            
            <tr>
                <th  scope="row">{{ $profil[0]->id }}</th>
                <td >  <img width="100px"  src="{{ asset($profil[0]->img ) }}" alt=""></td>
                
                
                <td class="d-flex gap-3 py-5">
                    
                    <a href="{{ route("profil.edit",$profil[0]->id) }}" class="btn btn-primary">edit</a>
                    {{-- <a href="{{ route("title.show",$profil->id) }}" class="btn btn-secondary">show</a> --}}
                </td>
                
            </tr>
            
            @endforeach
        </tbody>
    </table>
    @endsection
</div>