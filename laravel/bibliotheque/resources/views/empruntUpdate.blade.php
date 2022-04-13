@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Update Emprunts</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <form action = "/editEmprunts/{{$emprunt->id}}" method = "POST">
        @csrf
        <div class="form-group">
            <label for="id_exemplaires">id_exemplaires</label>
            <input type="text" class="form-control" id="id_exemplaires" name = "id_exemplaires" value = "{{$emprunt->id_exemplaires}}">
        </div>
        <div class="form-group">
            <label for="id_client">id_client</label>
            <input type="text" class="form-control" id="id_client" name = "id_client" value = "{{$emprunt->id_client}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection