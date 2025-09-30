<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeController extends Controller
{
    //
    //fonction pour enregistrer les EMPLOYERS dans la BDD
    public function store(Request $request)
    {
        $validated = $request->validate([
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            'date_naissance' => 'required|date',
            'profil' => 'required|string',
            'salaire' => 'required',
            'statut' => 'required',
        ]);

        Employe::create([
            'user_id' => Auth::user()->id,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'date_naissance' => $request->date_nessance,
            'profil' => $request->profil,
            'salaire' => $request->salaire,
            'statut' => $request->statut,
        ]);

        // return redirect()->route('employeur.dashboard');
    }
     //fonction pour ajouter les employes
    public function addEmploye(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'telephone' => 'required|string',
            'adresse' => 'required|string',
            'date_naissance' => 'required|date',
            'salaire' => 'required',
            'statut' => 'in:disponible,occuper,inactif',
        ]);

        // dd($request->all());
        
        Employe::create([
            'user_id' => Auth::user()->id,
            'service_id' => $request->service_id,
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'date_naissance' => $request->date_naissance,
            'profil' => '--a modifier--',
            'salaire' => $request->salaire,
            'statut' => $request->statut,
        ]);

        return view('employe.dashboard');
    }
}
