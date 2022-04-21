@extends('back.layouts.app')
@section('content-back')
    <div class='container'>
        <h1>Contact</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('contact.update' , $contact->id) }}' method='post'>
            @csrf
			<div>
				<label for=''>map</label>
				<input type='text' name='map' value='{{ $contact->map }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
