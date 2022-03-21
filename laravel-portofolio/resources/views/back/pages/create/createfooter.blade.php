@extends('back/layouts/app')

@section('content')
    

<form method="POST" action="{{ route("footer.store") }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">text1</label>
        <input type="text" class="form-control" name="text1"  id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">text2</label>
        <input name="text2" type="text"  class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection