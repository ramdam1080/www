@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Service</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('service.update' , $service->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>img</label>
				<input type='text' name='img' value='{{ $service->img }}'>
			<div>
			<div>
				<label for=''>h4</label>
				<input type='text' name='h4' value='{{ $service->h4 }}'>
			<div>
			<div>
				<label for=''>p</label>
				<input type='text' name='p' value='{{ $service->p }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
