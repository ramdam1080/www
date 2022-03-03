@extends('layouts/app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">date de publication </th>
                <th scope="col">contenue</th>

            </tr>
        </thead>
        <tbody>
            <!-- On cells (`td` or `th`) -->
            @foreach ($a as $item)
                <tr>
                    <th scope="row ">{{ $item->id }}</th>
                    <td class="table-warning">{{ $item->nom }}</td>
                    <td class="table-danger">{{ $item->prenom }}</td>
                    <td class="table-info">{{ $item->dtp }}</td>
                    <td class="table-secondary">{{ $item->contenue }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
