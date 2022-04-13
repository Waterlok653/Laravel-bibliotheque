@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Update Exemplaire</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <form action = "/editExemplaires/{{$exemplaires->id}}" method = "POST">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">etat</span>
            <select id="etat" name="etat" class="form-control">
                <option value="bon">bon</option>
                <option value="moyen">moyen</option>
                <option value="mauvais">mauvais</option>
            </select>
        </div>
        <div class="form-group">
            <label for="isbn">isbn</label>
            <input type="text" class="form-control" id="isbn" name = "isbn" value = "{{$exemplaires->isbn}}">
        </div>
        <div class="form-group">
            <label for="id_livre">id_livre</label>
            <input type="text" class="form-control" id="id_livre" name = "id_livre" value = "{{$exemplaires->id_livre}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection