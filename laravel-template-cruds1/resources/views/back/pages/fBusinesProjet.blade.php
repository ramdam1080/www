@extends('back/layouts/app')

@section('content')
<h1 class="text-center text-danger">CHANGEMENT</h1>

<div class="container">
<form action="{{ route("section.update",$section->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">sous-titre</label>
      <input type="text" value="{{ $section->sousTitre }}" class="form-control" id="exampleInputEmail1" name="sousTitre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titre</label>
      <input type="text" value="{{ $section->titre }}" class="form-control" id="exampleInputEmail1" name="titre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">text</label>
      <input type="text" value="{{ $section->text }}" class="form-control" id="exampleInputEmail1" name="text" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">text2</label>
      <input type="text" value="{{ $section->text2 }}" class="form-control" id="exampleInputEmail1" name="text2" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Lien</label>
      <input type="text" value="{{ $section->lien }}" class="form-control" id="exampleInputEmail1" name="lien" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
</div>
@endsection