@extends("layout")
@section("content")
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Update livre</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <form action = "/editLivres/{{$livre->id}}" method = "POST">
        @csrf
        <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" class="form-control" id="nom" name = "nom" value = "{{$livre->nom}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection