@extends('back/layouts/app')

@section('content')
    
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route("skill.store") }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nom</label>
        <input type="text" class="form-control" name="nom"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">pourcent</label>
        <input name="pourcent" type="text"  class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">value</label>
        <input name="value" type="text"  class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection