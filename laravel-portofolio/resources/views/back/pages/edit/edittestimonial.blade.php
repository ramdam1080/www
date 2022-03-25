@extends('back/layouts/app')

@section('content')
    

<form method="POST" enctype="multipart/form-data" action="{{ route("testimonial.update",$testimonial->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img</label>
        <input type="file" class="form-control" name="img" value="{{ $testimonial->img }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">paragraphe</label>
        <input type="text" class="form-control" name="paragraphe" value="{{ $testimonial->paragraphe }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">h3</label>
        <input type="text" class="form-control" name="h3" value="{{ $testimonial->h3 }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">h4</label>
        <input type="text" class="form-control" name="h4" value="{{ $testimonial->h4 }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">data</label>
        <input type="text" class="form-control" name="data" value="{{ $testimonial->data }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3 ">
        <label for="chekbox" class="form-label">Voulez-vous le rendre en prioritère</label>
        <input  type="checkbox" class="form-check-input" name="bool" value="true" id="chekbox" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection