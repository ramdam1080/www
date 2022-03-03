    @extends('layouts/app')

    @section('content')
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">nom</th>
          <th scope="col">prenom</th>
          <th scope="col">âge</th>
          <th scope="col">mots de passe</th>
          <th scope="col">pays</th>
        </tr>
      </thead>
      <tbody>
    <!-- On cells (`td` or `th`) -->
      @foreach ($user as $item)
 
       
          <tr>
            <th scope="row ">{{ $item->id }}</th>
            <td class="table-warning">{{ $item->nom }}</td>
            <td class="table-danger">{{ $item->prenom }}</td>
            <td class="table-info">{{ $item->age }}</td>
            <td class="table-secondary">{{ $item->mdp }}</td>
            <td class="table-primary">{{ $item->pays }}</td>
          </tr>

          @endforeach
        </tbody>
      </table>

    @endsection