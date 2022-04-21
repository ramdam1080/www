@extends('back.layouts.app')
@section('content-back')

{{-- @section('nav') --}}
    <div class='container'>
        <h1 class='my-5'>Titre</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <a class='btn btn-success' href='{{ route('titre.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>h1</th>
					<th scope='col'>h2</th>
                    <th class="text-center" scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($titres as $titre)
                    <tr>
                        <th scope='row'>{{ $titre->id }}</th>
						<td>{{ $titre->h1 }}</td>
						<td>{{ $titre->h2 }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-between'>
                                <form action='{{ route('titre.destroy', $titre->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('titre.edit', $titre->id) }}' role='button'>Edit</a>
                                <a class='btn btn-warning' href='{{ route('titre.show', $titre->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{{-- @endsection --}}
@endsection
