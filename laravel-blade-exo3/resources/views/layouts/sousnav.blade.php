
@if (url()->current() === "http://127.0.0.1:8000")
<h1>Welcome subheadind</h1>
<div class="bg-gray "><p class=" ms-3 py-2"><span class="text-primary">home</span> / welcome</p></div>
@endif
@if (url()->current() === "http://127.0.0.1:8000/about")
<h1>About subheading</h1>
<div class="bg-gray "><p class=" ms-3 py-2"><span class="text-primary">home</span> / about</p></div>
@endif
@if (url()->current() === "http://127.0.0.1:8000/contact")
<h1>contact subheading</h1>
<div class="bg-gray "><p class=" ms-3 py-2"><span class="text-primary">home</span> / contact</p></div>
@endif