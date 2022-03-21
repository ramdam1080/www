@extends('back/layouts/app')

@section('content')
    

<form method="POST" action="{{ route("about.update",$about->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">strong</label>
        <input type="text" class="form-control" name="strong" value="{{ $about->strong }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">span</label>
        <input name="span" type="text" value="{{ $about->span }}" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection