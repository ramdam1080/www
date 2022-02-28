@extends('layouts/app')

@section('content')
    {{-- <h1>{{ env("DATE_GMT") }}  o</h1> --}}
    <H1>{{ env('APP_NAME') }}</H1>
    <h2>{{ env("COUCOU") }}</h2>
    @include('partials/header')
    @include('pages/about')
    @include('pages/contact')
    @include('partials/footer')
@endsection8