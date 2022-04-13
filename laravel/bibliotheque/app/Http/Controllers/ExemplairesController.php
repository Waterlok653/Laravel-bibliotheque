<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exemplaire;
use App\Models\livre;

class ExemplairesController extends Controller
{
    public function getAll() {
        $exemplaires = exemplaire::all();
        return view ('exemplaireListe', ['exemplaires' => $exemplaires]);
    }
    public function create() {
        $livre=livre::where('id',request('id_livre'))->first();
        if(is_null($livre)){
            return view('/exemplaireProblem',['livre'=>$livre]);
        }
        else{
            request()->validate([
                'etat' => 'required',
                'id_livre' => 'required',
                'isbn' => 'required',
            ]);
            $etat = request('etat');
            $id_livre = request('id_livre');
            $isbn = request('isbn');
            $exemplaires = exemplaire::create([
                'etat' => $etat,
                'id_livre' => $id_livre,
                'isbn' => $isbn,
            ]);
            return view ('welcome');
        }
    }
    public function destroy($id) {
        exemplaire::destroy($id);
        return redirect('/exemplairesListe');
    }
    public function show($id) {
        $exemplaires = exemplaire::find($id);
        return view ('/exemplaireUbdate', ['exemplaires' => $exemplaires]);
    }
    public function edit(Request $request,$id){
        $etat = $request->input('etat');
        $id_livre = $request->input('id_livre');
        $isbn = $request->input('isbn');
        exemplaire::where('id',$id)->update([
            'etat'=>$etat,
            'id_livre'=>$id_livre,
            'isbn'=>$isbn,
        ]);
        return redirect('/exemplairesListe');
    }
}
