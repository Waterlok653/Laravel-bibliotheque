@extends("layout")
@section("content")
@section('pageTitle', 'Client Index')
<div class="modal-header text-center">
	<h2 class="modal-title w-100">Liste des emprunts en cours</h2>
</div>
<div class="w-50 container d-flex align-items-center justify-content-center">
    <form action="/empruntsContinus/{{$id_client}}" method="POST">
        <input type="hidden" name="id_client" name="id_client" value="{{$id_client}}">
        <div>
            @csrf
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">date de debut</th>
                        <th scope="col">Date de fint</th>
                        <th scope="col">id_exemplaires</th>
                        <th scope="col">id_client</th>
                    </tr>
                    @foreach($emprunts as $emprunt)
                    <tr>
                        <td>{{$emprunt->id}}</td>
                        <td>{{$emprunt->dateDebut}}</td>
                        <td>{{$emprunt->dateRendue}}</td>
                        <td>{{$emprunt->id_exemplaires}}</td>
                        <td>{{$emprunt->id_client}}</td>
                    </tr>
                    @endforeach
            </table>
            <button type="submit" class="btn btn-outline-secondary btn-lg">Suivant</button>
        </div>
    </form> 
</div>
@endsection