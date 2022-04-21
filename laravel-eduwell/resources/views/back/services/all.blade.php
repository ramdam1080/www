@extends('back.layouts.app')
@section('content-back')

    <div class='container'>
        <h1 class='my-5'>Service</h1>
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
        <a class='btn btn-success' href='{{ route('service.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>img</th>
					<th scope='col'>post</th>
					<th scope='col'>p</th>
                    <th class="text-center" scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $item)
                    <tr>
                        <th scope='row'>{{ $item->id }}</th>
						<td><img src="{{ asset("images/" . $item->img) }}" alt=""></td>
						<td>{{ $item->post }}</td>
						<td>{{ $item->p }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-between'>
                                <form action='{{ route('service.destroy', $item->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('service.edit', $item->id) }}' role='button'>Edit</a>
                                <a class='btn btn-warning' href='{{ route('service.show', $item->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
