@extends('layouts/app')


@section('content')
    
<div class="container my-4">

<div style="box-shadow: 5px 5px 5px gray;" class="bg-secondary p-5 rounded-3">   
    
    <form method="POST" action="{{ route("user.update" ,$user->id) }}">
        @csrf
        @method("PUT")
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">email</label>
          <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">nickname</label>
          <input type="text" class="form-control" value="{{ $user->nickname }}" name="nickname" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" value="{{ $profil->name }}" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">age</label>
          <input type="number" class="form-control" value="{{ $profil->age }}" name="age" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">phone</label>
          <input type="tel" class="form-control" value="{{ $profil->phone }}" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">  
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
    </div>

</div>

@endsection