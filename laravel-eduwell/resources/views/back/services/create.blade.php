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
        <form action='{{ route('service.store') }}' method='post'>
            @csrf
			<div>
				<label for=''>img</label>
				<input type='text' name='img'>
			<div>
			<div>
				<label for=''>h4</label>
				<input type='text' name='h4'>
			<div>
			<div>
				<label for=''>p</label>
				<input type='text' name='p'>
			<div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}}
        </form>
    </div>
@endsection
