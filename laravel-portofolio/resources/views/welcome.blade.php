@extends('front/layouts/app')

@section('content')
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
@include('front/pages/header')
@include('front/pages/heros')
@include('front/pages/about')
@include('front/pages/fact')
@include('front/pages/skill')
@include('front/pages/portfolio')
@include('front/pages/testimonial')
@include('front/pages/contact')
@include('front/pages/footer')
@endsection