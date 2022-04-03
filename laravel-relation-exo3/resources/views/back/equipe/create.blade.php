
@extends('back/layouts/app')

@section('content')
<div class="container my-3">
    <form method="POST" action="{{ route('equipe.store') }}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nom</label>
          <input type="text"  name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">ville</label>
          <input type="text"  name="ville" class="form-control" id="exampleInputPassword1">
        </div>
      

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">pays</label>
          <input type="text"  name="pays" class="form-control" id="exampleInputPassword1">
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>
@endsection

