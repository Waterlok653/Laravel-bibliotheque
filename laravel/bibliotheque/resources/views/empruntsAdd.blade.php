@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Ajouter un emprunts</h2>
</div>
<form action="/empruntsAdd" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="w-50 container db">
		<div class="input-group mb-3">
			<span class="input-group-text" id="inputGroup-sizing-default">id client</span>
			<input name="client" id="client" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
		</div>
	<button type="submit" class="btn btn-outline-secondary btn-lg">Suivant</button>
	</div>
</form>
@endsection