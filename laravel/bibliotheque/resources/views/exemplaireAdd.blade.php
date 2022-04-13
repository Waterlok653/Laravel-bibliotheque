@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Ajouter un exemplaires</h2>
</div>
<form action="/exemplaireAdd" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="w-50 container db">
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">id livre</span>
			<input name="id_livre" id="id_livre" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">ISBN</span>
			<input name="isbn" id="isbn" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">etat</span>
            <select id="etat" name="etat" class="form-control">
                <option value="bon">bon</option>
                <option value="moyen">moyen</option>
                <option value="mauvais">mauvais</option>
            </select>
        </div>
	<button type="submit" class="btn btn-outline-secondary btn-lg">Ajouter</button>
	</div>
</form>
@endsection