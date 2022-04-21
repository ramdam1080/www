@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Service</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>img</th>
					<th scope='col'>h4</th>
					<th scope='col'>p</th>
                    <th scope='col'>Action</th> {{-- show_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $service->id }}</th>
						<td>{{ $service->img }}</td>
						<td>{{ $service->h4 }}</td>
						<td>{{ $service->p }}</td>
                    <td> {{-- show_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('service.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
