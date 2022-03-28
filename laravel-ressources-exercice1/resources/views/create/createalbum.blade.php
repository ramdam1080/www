@extends('layouts/app')

@section('content')
<div class="container">
    <div class="my-5" style="background-color: rgb(0, 0, 0,0.7); padding: 40px">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li> 
                    @endforeach    
                </ul>    
            </div>    

        @endif
<form method="POST" action="{{ route("album.store") }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">nom</label>
      <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">description</label>
      <input  type="text" class="form-control" name="description" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">auteur</label>
      <input type="text"  class="form-control" name="auteur" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">nombre de photo</label>
      <input type="text"  class="form-control" name="photo" id="exampleInputPassword1">
    </div>
    @foreach ($user as $item)
    
    <input type="radio" class="btn-check" name="album" id="option{{ $item->id }}" value="{{ $item->id }}" >
    <label class="btn btn-secondary" for="option{{ $item->id }}">{{ $item->nom }} {{ $item->prenom }}</label>
    
    @endforeach

    <br>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection