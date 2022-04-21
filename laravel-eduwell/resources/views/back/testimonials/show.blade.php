@extends('back.layouts.app')
@section('content-back')
    <div class='container'>
        <h1 class='my-5'>Testimonial</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>p</th>
					<th scope='col'>h4</th>
					<th scope='col'>span</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $testimonial->id }}</th>
						<td>{{ $testimonial->p }}</td>
						<td>{{ $testimonial->h4 }}</td>
						<td>{{ $testimonial->span }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('testimonial.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
