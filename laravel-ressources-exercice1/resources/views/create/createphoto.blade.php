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
<form method="POST" action="{{ route("photo.store") }}">
    @csrf
    
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">nom</label>
      <input name="nom" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">lien</label>
      <input  type="text" class="form-control" name="lien" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">album</label>
      <input type="text"  class="form-control" name="album" id="exampleInputPassword1">
    </div>
    @foreach ($album as $item)
    
    <input type="radio" class="btn-check" name="photo" id="option{{ $item->id }}" value="{{ $item->id }}" >
    <label class="btn btn-secondary" for="option{{ $item->id }}">{{ $item->nom }}</label>
    
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection