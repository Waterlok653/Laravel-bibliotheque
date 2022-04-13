@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Ajouter Emprunt</h2>
</div>
<div class="w-500 container d-flex align-items-center justify-content-center">
    <form action = "/empruntsAdd2" method = "POST">
        @csrf
        <div class="form-group">
            <label for="exemplaire">id_exemplaires</label>
            <input type="text" class="form-control" id="exemplaire" name = "exemplaire">
        </div>
            <input type="hidden" class="form-control" id="client" name = "client" value = "{{$id_client}}">
            <button type="submit" class="btn btn-outline-secondary btn-lg">Submit</button>
        </div>
    </form>
</div>
@endsection