@extends('back/layouts/app')

@section('content')
<h1 class="text-center text-danger">CHANGEMENT</h1>

<div class="container">
<form action="{{ route("contact.update",$contact->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titre</label>
      <input type="text" value="{{ $contact->titre }}" class="form-control" id="exampleInputEmail1" name="titre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">sous-titre</label>
      <input type="text" value="{{ $contact->sousTitre }}" class="form-control" id="exampleInputEmail1" name="sousTitre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">boutton</label>
      <input type="text" value="{{ $contact->btn }}" class="form-control" id="exampleInputEmail1" name="btn" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
</div>
@endsection