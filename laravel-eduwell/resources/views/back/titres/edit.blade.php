@extends('back.layouts.app')
@section('content-back')
    <div class='container'>
        <h1>Titre</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('titre.update' , $titre->id) }}' method='post'>
            @csrf
            @method('put')
			<div>
				<label for=''>h1</label>
				<input type='text' name='h1' value='{{ $titre->h1 }}'>
			<div>
			<div>
				<label for=''>h2</label>
				<input type='text' name='h2' value='{{ $titre->h2 }}'>
			<div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
