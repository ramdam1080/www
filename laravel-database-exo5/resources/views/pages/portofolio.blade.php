@extends('layouts/app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">description</th>
            <th scope="col">image </th>
           

        </tr>
    </thead>
    <tbody>
        <!-- On cells (`td` or `th`) -->
        @foreach ($p as $item)
            <tr>
                <th scope="row ">{{ $item->id }}</th>
                <td class="table-warning">{{ $item->nom }}</td>
                <td class="table-danger">{{ $item->description }}</td>
                <td class="table-info">{{ $item->img }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@endsection