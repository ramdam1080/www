<div class="c mt-4">

    @include('layouts/sousnav') 
<p class="m-0">{{url()->current(); }}{{ url()->current(); }}{{ url()->previous(); }}</p>
<div class="bg-gray text-center container py-6">
    <h2 class="h1">Hello Coding School</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores, aspernatur.</p>
    <hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <button class="btn bg-primary">About</button>
</div>
    <div class="text-center mt-3 ">
        <h3>Bonus:</h3>
        <p><b>Url actuelle:</b> {{url()->current();  }}</p>
        <p><b>Url precedent:</b> {{url()->previous();  }}</p>
       
        
    </div>
</div>
    