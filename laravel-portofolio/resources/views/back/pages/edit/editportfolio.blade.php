@extends('back/layouts/app')

@section('content')
    

<form method="POST" enctype="multipart/form-data" action="{{ route("portfolio.update",$portfolio->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">img</label>
        <input type="file" class="form-control" name="img" value="{{ $portfolio->img }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">filter</label>
        <input type="text" class="form-control" name="filter" value="{{ $portfolio->filter }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">icone1</label>
        <input type="text" class="form-control" name="icone1" value="{{ $portfolio->icone1 }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">icone2</label>
        <input type="text" class="form-control" name="icone2" value="{{ $portfolio->icone2 }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection