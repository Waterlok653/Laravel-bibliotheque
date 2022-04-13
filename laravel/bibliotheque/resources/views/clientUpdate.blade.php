@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Update Client</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <form action = "/editClient/{{$client->id}}" method = "POST">
        @csrf
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name = "prenom" value = "{{$client->prenom}}">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name = "nom" value = "{{$client->nom}}">
        </div>
        <div class="form-group">
            <label for="dateNaissence">Date de naissance</label>
            <input type="date" class="form-control" id="dateNaissence" name = "dateNaissence" value = "{{$client->dateNaissence}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection