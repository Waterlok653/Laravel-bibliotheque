@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Ajouter un Client</h2>
</div>
<form action="/clientAdd" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="w-50 container db">
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">prenom</span>
			<input name="prenom" id="prenom" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">nom</span>
			<input name="nom" id="nom" type="text"class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">date de naissence</span>
			<input name="dateNaissence" id="dateNaissence" type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
	<button type="submit" class="btn btn-outline-secondary btn-lg">Ajouter</button>
	</div>
</form>
@endsection