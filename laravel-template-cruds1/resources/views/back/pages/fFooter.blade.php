@extends('back/layouts/app')

@section('content')
<h1 class="text-center text-danger">CHANGEMENT</h1>

<div class="container">
<form action="{{ route("footer.update",$footer->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titre</label>
      <input type="text" value="{{ $footer->titre }}" class="form-control" id="exampleInputEmail1" name="titre" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">icone1</label>
      <input type="text" value="{{ $footer->icone1 }}" class="form-control" id="exampleInputEmail1" name="icone1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">icone2</label>
      <input type="text" value="{{ $footer->icone2 }}" class="form-control" id="exampleInputEmail1" name="icone2" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">icone2</label>
      <input type="text" value="{{ $footer->icone3 }}" class="form-control" id="exampleInputEmail1" name="icone3" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">text</label>
      <input type="text" value="{{ $footer->text }}" class="form-control" id="exampleInputEmail1" name="text" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
</div>
@endsection