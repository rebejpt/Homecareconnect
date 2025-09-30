<?php

namespace App\Http\Controllers;

use App\Models\Employeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeurController extends Controller
{
    //
    //fonction pour enregistrer les EMPLOYERS dans la BDD
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'nom_entreprise' => 'required|string',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            
            
        ]);

        Employeur::create([
            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'nom_entreprise'  => $request->nom_entreprise,
            'telephone' => $request->telephone,
            'adresse'  => $request->adresse,
            
        ]);

        return redirect()->route('employeur.dashboard');
    }
     //fonction pour ajouter les employes
    public function addEmployeur(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'nom_entreprise' => 'required|string',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
        ]);

        // dd($request->all());
        
        Employeur::create([
            'user_id' => Auth::user()->id,
            'type' => $request->type,
            'nom_entreprise'  => $request->nom_entreprise,
            'telephone' => $request->telephone,
            'adresse'  => $request->adresse,
            
        ]);

        // return view('employeur.dashboard');
        return redirect()->route('employeur.dashboard')->with('success', 'Employeur ajouté avec succès');

    }
}
