@extends('layouts/app')

@section('content')
<div class="container">
    <div class="my-5" style="background-color: rgb(0, 0, 0,0.7); padding: 40px">
<form method="POST" action="{{ route("user.store") }}">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label text-white">nom</label>
      <input name="nom"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">Prenom</label>
      <input  type="text" class="form-control" name="prenom" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">age</label>
      <input type="text"  class="form-control" name="age" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">naissance</label>
      <input type="date"  class="form-control" name="naissance" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">email</label>
      <input  type="email" class="form-control" name="email" id="exampleInputPassword1">
    </div>
    
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">password</label>
      <input  type="password" class="form-control" name="password" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label text-white">nombre d'album</label>
      <input  type="text" class="form-control" name="album" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection