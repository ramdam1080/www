@extends('back/layouts/app')

@section('content')
    

<form method="POST" action="{{ route("filter.update",$filter->id) }}">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">filter</label>
        <input type="text" class="form-control" name="filter" value="{{ $filter->filter }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">class</label>
        <input type="text" class="form-control" name="class" value="{{ $filter->class }}" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">data</label>
        <input name="data" type="text" value="{{ $filter->data }}" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection