@extends('back/layouts/app')

@section('content')
<h1 class="text-center text-danger">Création</h1>

<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="{{ route("banner.store") }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">text</label>
      <input type="text"  class="form-control" id="exampleInputEmail1" name="text" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>    
</div>
@endsection