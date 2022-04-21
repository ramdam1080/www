@extends('back.layouts.app')
@section('content-back')
    <div class='container'>
        <h1>Testimonial</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('testimonial.update' , $testimonial->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>p</label>
				<input type='text' name='p' value='{{ $testimonial->p }}'>
			<div>
			<div>
				<label for=''>h4</label>
				<input type='text' name='h4' value='{{ $testimonial->h4 }}'>
			<div>
			<div>
				<label for=''>span</label>
				<input type='text' name='span' value='{{ $testimonial->span }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
