@extends('back/layouts/app')

@section('content')
    

<form method="POST" action="{{ route("title.update",$title->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">title</label>
        <input type="text" class="form-control" name="title" value="{{ $title->title }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">description</label>
        <input name="description" type="text" value="{{ $title->description }}" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection