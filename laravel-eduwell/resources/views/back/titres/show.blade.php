@extends('back.layouts.app')
@section('content-back')
    <div class='container'>
        <h1 class='my-5'>Titre</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>h1</th>
					<th scope='col'>h2</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $titre->id }}</th>
						<td>{{ $titre->h1 }}</td>
						<td>{{ $titre->h2 }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('titre.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
