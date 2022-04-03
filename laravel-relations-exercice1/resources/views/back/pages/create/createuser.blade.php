@extends('layouts/app')

@section('content')
    <div class="container my-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>

        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="nom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="prenom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">age</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="age"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password"  name="mdp" class="form-control"
                    id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">dtn</label>
                <input type="date" class="form-control" id="exampleInputEmail1"  name="dtn"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">genre</label>
                <input type="text" class="form-control" id="exampleInputEmail1"  name="genre"
                    aria-describedby="emailHelp">
            </div>
            
            @foreach ($role as $item)
            <input type="radio" class="btn-check" name="id" id="option{{ $item->id }}" value="{{$item->id }}">
            <label class="btn btn-secondary" for="option{{ $item->id }}">{{ $item->nom }}</label>
            @endforeach

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
