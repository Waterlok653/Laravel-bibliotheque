@extends("layout")
@section("content")
@section('pageTitle', 'Client Index')
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Liste des exemplaire</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <table class="table table-striped">
        <thead>
        <th>id</th>
        <th>etat</th>
        <th>isbn</th>
        <th>id livre</th>
        <td>Edit</td>
        </thead>

        @foreach($exemplaires as $exemplaire)
            <tr>
                <td>{{$exemplaire->id}}</td>
                <td>{{$exemplaire->etat}}</td>
                <td>{{$exemplaire->isbn}}</td>
                <td>{{$exemplaire->id_livre}}</td>
                <td><a href = 'exemplairesDelete/{{ $exemplaire->id }}' class="btn btn-danger">Delete</a><a href = 'exemplairesEdit/{{ $exemplaire->id }}' class="btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection