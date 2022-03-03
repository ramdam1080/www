@extends('layouts/app')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">nom</th>
            <th scope="col">ville</th>
            <th scope="col">nombre de joueur </th>
            <th scope="col">nombre de poste</th>

        </tr>
    </thead>
    <tbody>
        <!-- On cells (`td` or `th`) -->
        @foreach ($e as $item)
            <tr>
                <th scope="row ">{{ $item->id }}</th>
                <td class="table-warning">{{ $item->nom }}</td>
                <td class="table-danger">{{ $item->ville }}</td>
                <td class="table-info">{{ $item->nbrdejoueur }}</td>
                <td class="table-secondary">{{ $item->nbrdeposte }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection