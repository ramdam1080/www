@extends('back/layouts/app')

@section('content')
    

<form method="POST" enctype="multipart/form-data" action="{{ route("testimonial.store") }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img</label>
        <input type="file" class="form-control" name="img"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">paragraphe</label>
        <input type="text" class="form-control" name="paragraphe"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">h3</label>
        <input type="text" class="form-control" name="h3"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">h4</label>
        <input type="text" class="form-control" name="h4" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">data</label>
        <input type="text" class="form-control" name="data" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection