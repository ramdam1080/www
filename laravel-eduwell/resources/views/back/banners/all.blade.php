@extends('back.layouts.app')
@section('content-back')


    <div class='container'>
        <h1 class='my-5'>Banner</h1>
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
        <a class='btn btn-success' href='{{ route('banner.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
					<th scope='col'>img</th>
					<th scope='col'>button</th>
                    <th class="text-center" scope='col'>Action</th> {{-- all_tr_anchor --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($banners as $banner)
                    <tr>
                        <th scope='row'>{{ $banner->id }}</th>
						<td><img width="150px" src="{{ asset("images/" .  $banner->img ) }}" alt=""></td>
						<td>{{ $banner->button }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex justify-content-between'>
                                <form action='{{ route('banner.destroy', $banner->id) }}' method='post'>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('banner.edit', $banner->id) }}' role='button'>Edit</a>
                                <a class='btn btn-warning' href='{{ route('banner.show', $banner->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
