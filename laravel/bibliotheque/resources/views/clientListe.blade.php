@extends("layout")
@section("content")
@section('pageTitle', 'Client Index')
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Liste des Client</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <table class="table table-striped">
        <thead>
        <th>id</th>
        <th>prenom</th>
        <th>nom</th>
        <th>date de naissence</th>
        <td>Edit</td>
        </thead>

        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->nom}}</td>
                <td>{{$client->dateNaissence}}</td>
                <td><a href = 'clientDelete/{{ $client->id }}' class="btn btn-danger">Delete</a><a href = 'clientEdit/{{ $client->id }}' class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection