@extends('back/layouts/app')

@section('content')
    <div class="container my-3">

        @if (session()->has("create"))
            <div class="alert alert-danger">

                {{ session()->get("create") }}

            </div>
        @endif

        <form method="POST" action="{{ route('joueur.store') }}">
            @csrf
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text"  name="nom" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">prenom</label>
                <input type="text"  name="prenom" class="form-control"
                    id="exampleInputPassword1">
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">age</label>
                <input type="text"  name="age" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">telephone</label>
                <input type="text"  name="telephone" class="form-control"
                    id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="email"  name="email" class="form-control"
                    id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">genre</label>
                <input type="text"  name="genre" class="form-control"
                    id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">origine</label>
                <input type="text"  name="origine" class="form-control"
                    id="exampleInputPassword1">
            </div>

            @foreach ($equipe as $item)
            <input type="radio" class="btn-check" value="{{ $item->id }}" name="equipe" id="{{ $item->id }}" >
            <label class="btn btn-secondary"  for="{{ $item->id }}">{{ $item->nom }}</label>
            @endforeach

            <br>
            <br>
            
            @foreach ($role as $item)
            <input type="radio" class="btn-check" value="{{ $item->id }}" name="role" id="role{{ $item->id }}" >
            <label class="btn btn-secondary"  for="role{{ $item->id }}">{{ $item->nom }}</label>
            @endforeach

            <br>
            <br>
          


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
