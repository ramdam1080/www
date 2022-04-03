@extends('back/layouts/app')

@section('content')
<div style="background-color: lightgray; height: 100vh;">
        <div class="container py-5">

            <div style="background-color: gray; box-shadow: 5px 5px 5px gray; border-radius: 20px; text-align: center">
                    <h5>nom</h5>
                    <p>{{$equipe->nom  }}</p>

                    <h5>ville</h5>
                    <p>{{$equipe->ville  }}</p>
                    <h5>pays</h5>
                    <p>{{$equipe->pays  }}</p>
                    <h5>nombre de joueur</h5>
                    <p>{{$equipe->joueur->count()}} / {{ $equipe->max }} </p>


            </div>

        </div>
        <a href="{{ route("equipe.index") }}" class="btn btn-primary">return</a>
        </div>
@endsection