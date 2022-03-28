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
<form method="POST" action="{{ route("album.update",$album->id) }}">
    @csrf
    @method("PUT")
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">nom</label>
      <input name="nom" value="{{ $album->nom }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">description</label>
      <input value="{{ $album->description }}" type="text" class="form-control" name="description" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">auteur</label>
      <input type="text" value="{{ $album->auteur }}" class="form-control" name="auteur" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white"> nombre de photo</label>
      <input type="text" value="{{ $album->photo }}" class="form-control" name="photo" id="exampleInputPassword1">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection