<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprunt;
use App\Models\exemplaire;
use App\Models\client;

class EmpruntsController extends Controller
{
    public function getAll() {
        $emprunts = emprunt::all();
        return view ('empruntsListe', ['emprunts' => $emprunts]);
    }
    public function create() {
        //look if the exemplaire is a id from the database
        $exemplaire = exemplaire::find(request('exemplaire'));
        if(is_null($exemplaire)){
            return view('/empruntExProblem',['exemplaire'=>$exemplaire]);
        }
        else{
            $dateRetour = request('dateRetour');
            $id_exemplaire = request('exemplaire');
            $id_client = request('client');
            $emprunts = emprunt::create([
                'dateDebut' => now(),
                'dateRetour' => $dateRetour,
                'id_exemplaires' => $id_exemplaire,
                'id_client' => $id_client,
            ]);
            return view ('welcome');
        }
    }
    public function destroy($id) {
        emprunt::destroy($id);
        return redirect('/empruntsListe');
    }
    public function show($id) {
        $emprunts = emprunt::find($id);
        return view ('/empruntUpdate', ['emprunt' => $emprunts]);
    }
    public function edit(Request $request,$id){
        $dateDebut = $request->input('dateDebut');
        $id_exemplaires = $request->input('id_exemplaires');
        $id_client = $request->input('id_client');
        emprunt::where('id',$id)->update([
            'dateDebut'=>$dateDebut,
            'id_exemplaires'=>$id_exemplaires,
            'id_client'=>$id_client,
        ]);
        return redirect('/empruntsListe');
    }
    public function controleClient(){
        $client=client::where('id',request('client'))->first();
        if(is_null($client)){
            return view('/empruntClientProblem',['client'=>$client]);
        }
        else{
            $id_client = request('client');
            $emprunts = emprunt::where('id_client', '=', $id_client)->get();
            if(count($emprunts)<5){
                return view ('/empruntsListeEncours', ['emprunts' => $emprunts],['id_client' => $id_client]);
            }
            else{
                return view('/empruntsListePlus5',['emprunts' => $emprunts]);
            }
        }
    }
    public function empruntsContinus($id){
        return view ('/empruntsAdd2', ['id_client' => $id]);
    }
}
