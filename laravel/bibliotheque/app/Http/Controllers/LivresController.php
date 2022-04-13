<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livre;

class LivresController extends Controller
{
    public function getAll() {
        $livres = livre::all();
        return view ('livreListe', ['livres' => $livres]);
    }
    public function create() {

        request()->validate([
            'nom' => 'required',
        ]);
        $nom = request('nom');

        
        $livres = livre::create([
            'nom' => $nom,
        ]);
        return view ('welcome');
    }
    public function destroy($id) {
        livre::destroy($id);
        return redirect('/livresListe');
    }
    public function show($id) {
        $livres = livre::find($id);
        return view ('/livreUpdate', ['livre' => $livres]);
    }
    public function edit(Request $request,$id){
        $nom = $request->input('nom');
        livre::where('id',$id)->update([
            'nom'=>$nom,
        ]);
        return redirect('/livresListe');
    }
}
