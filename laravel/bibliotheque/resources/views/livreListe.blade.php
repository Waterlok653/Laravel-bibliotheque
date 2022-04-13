@extends("layout")
@section("content")
@section('pageTitle', 'Client Index')
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Liste des livre</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <table class="table table-striped">
        <thead>
        <th>id</th>
        <th>nom</th>
        <td>Edit</td>
        </thead>

        @foreach($livres as $livre)
            <tr>
                <td>{{$livre->id}}</td>
                <td>{{$livre->nom}}</td>
                <td><a href = 'livresDelete/{{ $livre->id }}' class="btn btn-danger">Delete</a><a href = 'livresEdit/{{ $livre->id }}' class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection