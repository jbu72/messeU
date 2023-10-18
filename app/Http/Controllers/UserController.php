<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function HomeUser()
    {
        return view('Utilisateur.home');
    }
    public function formdemande($type)
    {
        return view('Utilisateur.formDemande', compact('type'));
    }
    public function traitementdemande(Request $request)
    {
        $request->validate([
            'nom_prenom' => 'required',
            'intention' => 'required',
            'datetime' => 'required',
            'numero' => 'required',
            'type' => 'required',
        ]);

        return view('Utilisateur.formDemande', compact('type'));
    }
}
