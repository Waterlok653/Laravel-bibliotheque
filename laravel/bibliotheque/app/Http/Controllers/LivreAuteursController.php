<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivrelivreauteursController extends Controller
{
    public function getAll() {
        $livreauteurs = livreauteurs::all();
        return view ('welcome', ['livreauteurs' => $livreauteurs]);
    }
}
