@extends('back/layouts/app')

@section('content')
<style>
    a {
        text-decoration: none;
        color: black;
        font-size: 25px
    };

   
</style>
    <div style="background-color: lightgray; height: 100vh;">
        <div class="container py-5">

            <div style="background-color: gray; box-shadow: 5px 5px 5px gray; border-radius: 20px; text-align: center">
                <h5>nom</h5>
                <p>{{ $joueur->nom }}</p>

                <h5>prenom</h5>
                <p>{{ $joueur->prenom }}</p>
                <h5>age</h5>
                <p>{{ $joueur->age }}</p>
                <h5>telephone</h5>
                <p>{{ $joueur->telephone }}</p>
                <h5>email</h5>
                <p>{{ $joueur->email }}</p>
                <h5>genre</h5>
                <p>{{ $joueur->genre }}</p>
                <h5>origne</h5>
                <p>{{ $joueur->origine }}</p>
                <h5>equipe</h5>
                <a href="/equipe/{{ $joueur->equipe->id }}">{{ $joueur->equipe->nom }}</a>


            </div>

        </div>
        <a href="{{ route('equipe.index') }}" class="btn btn-primary">return</a>
    </div>
@endsection
