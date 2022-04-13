<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuteursController extends Controller
{
    public function getAll() {
        $auteurs = auteurs::all();
        return view ('welcome', ['auteurs' => $auteurs]);
    }
}
