@extends('back/layouts/app')

@section('content')
    

<form method="POST" enctype="multipart/form-data" action="{{ route("profil.update",$profil->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img</label>
        <input type="file" class="form-control" name="img" value="{{ $profil->img }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection