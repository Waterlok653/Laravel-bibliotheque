@extends("layout")
@section("content")
@section('pageTitle', 'Client Index')
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Liste des emprunts</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <table class="table table-striped">
        <thead>
        <th>id</th>
        <th>date de Debut</th>
        <th>date de rendue</th>
        <th>id exemplaire</th>
        <th>id client</th>
        <td>Edit</td>
        </thead>

        @foreach($emprunts as $emprunt)
            <tr>
                <td>{{$emprunt->id}}</td>
                <td>{{$emprunt->dateDebut}}</td>
                <td>{{$emprunt->dateRendue}}</td>
                <td>{{$emprunt->id_exemplaires}}</td>
                <td>{{$emprunt->id_client}}</td>
                <td><a href = 'empruntsDelete/{{ $emprunt->id }}' class="btn btn-danger">Delete</a><a href = 'empruntsEdit/{{ $emprunt->id }}' class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection