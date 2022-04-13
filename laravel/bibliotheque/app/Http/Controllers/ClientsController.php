<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function getAll() {
        $clients = Client::all();
        return view ('clientListe', ['clients' => $clients]);
    }
    public function create() {
        request()->validate([
            'prenom' => 'required',
            'nom' => 'required',
            'dateNaissence' => 'required',
        ]);
        $prenom = request('prenom');
        $nom = request('nom');
        $dateNaissence = request('dateNaissence');

        
        $clients = Client::create([
            'prenom' => $prenom,
            'nom' => $nom,
            'dateNaissence' => $dateNaissence,
        ]);
        return view ('welcome');
    }
    public function destroy($id) {
        Client::destroy($id);
        return redirect('/clientListe');
    }
    public function show($id) {
        $client = Client::find($id);
        return view ('/clientUpdate', ['client' => $client]);
    }
    public function edit(Request $request,$id){
        $prenom = $request->input('prenom');
        $nom = $request->input('nom');
        $dateNaissence = $request->input('dateNaissence');
        Client::where('id',$id)->update(['prenom'=>$prenom,'nom'=>$nom,'dateNaissence'=>$dateNaissence]);
        return redirect('/clientListe');
    }
}
