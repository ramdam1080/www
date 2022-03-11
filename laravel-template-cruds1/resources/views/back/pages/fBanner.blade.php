@extends('back/layouts/app')

@section('content')
<h1 class="text-center text-danger">CHANGEMENT</h1>

<div class="container">
<form action="{{ route("banner.update",$banner->id) }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">text</label>
      <input type="text" value="{{ $banner->text }}" class="form-control" id="exampleInputEmail1" name="text" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
</div>
@endsection