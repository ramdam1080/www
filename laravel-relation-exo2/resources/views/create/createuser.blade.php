@extends('layouts/app')


@section('content')
    
<div class="container my-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<div style="box-shadow: 5px 5px 5px gray;" class="bg-secondary p-5 rounded-3">   
    
    <form method="POST" action="{{ route("user.store" ) }}">
        @csrf
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">email</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nickname</label>
          <input type="text" class="form-control"  name="nickname" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control"  name="name" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">age</label>
          <input type="number" class="form-control"  name="age" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">phone</label>
          <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    </div>

</div>

@endsection