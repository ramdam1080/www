@extends('back.layouts.app')
@section('content-back')
@section('nav')
    <div class='container'>
        <h1 class='my-5'>Contact</h1>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>map</th>
                    <th scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope='row'>{{ $contact->id }}</th>
						<td>{{ $contact->map }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
								<a class='btn btn-primary' href='{{ route('contact.edit', $contact->id) }}' role='button'>Edit</a>
                            </div> {{-- all_button_anchor --}} 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@endsection
