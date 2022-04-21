@extends('back/layouts/app')
@extends('back/partials/navlink')

@section('content-back')
<li>

    
    <a href="/back/titre">Titre</a>
    <a href="/back/banner">Banner</a>
    <a href="/back/service">Service</a>
    <a href="/back/testimonial">Testimonial</a>
</li>
{{-- 
    @include('back/titres.all')
    @include('back/banners.all') --}}

@endsection
{{-- @endsection --}}