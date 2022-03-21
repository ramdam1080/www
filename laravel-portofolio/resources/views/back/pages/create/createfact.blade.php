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
<form method="POST" action="{{ route("fact.store") }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">icone</label>
        <input type="text" class="form-control" name="icone"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nombre</label>
        <input type="text" class="form-control" name="nombre"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">strong</label>
        <input type="text" class="form-control" name="strong"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">text</label>
        <input name="text" type="text"  class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection