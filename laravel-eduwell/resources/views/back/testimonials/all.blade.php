@extends('back.layouts.app')
@section('content-back')

    <div class='container'>
        <h1 class='my-5'>Testimonial</h1>
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
        <a class='btn btn-success' href='{{ route('testimonial.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>p</th>
					<th scope='col'>h4</th>
					<th scope='col'>span</th>
                    <th class="text-center" scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr>
                        <th scope='row'>{{ $testimonial->id }}</th>
						<td>{{ $testimonial->p }}</td>
						<td>{{ $testimonial->h4 }}</td>
						<td>{{ $testimonial->span }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-between'>
                                <form action='{{ route('testimonial.destroy', $testimonial->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('testimonial.edit', $testimonial->id) }}' role='button'>Edit</a>
                                <a class='btn btn-warning' href='{{ route('testimonial.show', $testimonial->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

