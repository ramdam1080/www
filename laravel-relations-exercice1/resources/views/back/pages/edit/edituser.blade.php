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
        @endif
        <form method="POST" action="{{ route('user.update', $user->id) }}">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->nom }}" name="nom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->prenom }}" name="prenom"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">age</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->age }}" name="age"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email }}" name="email"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" value="{{ $user->mdp }}" name="mdp" class="form-control"
                    id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">dtn</label>
                <input type="date" class="form-control" id="exampleInputEmail1" value="{{ $user->dtn }}" name="dtn"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">genre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value="{{ $user->genre }}" name="genre"
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
