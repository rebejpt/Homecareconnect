<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class AjoutServiceController extends Controller
{
    //
       //
    public function getAjoutServices()
    {
        return view('admin.ajout_service');
        //la vue qui sera retourner
    }
    
    // public function store(Request $request)
    // {
    //     // 1. Validation
    //     $validated = $request->validate([
    //         'nom'=> ['required','string','max:255'],
    //         'description'=> ['required','text'],
    //         'tarif'=> ['required','decimal'],
    //     ]);

    //     // 2. Enregistrement en BDD
    //     Service::create([
    //         'nom' => $validated['nom'],
    //         'description' => $validated['description'],
    //         'tarif' => $validated['tarif'],
         
    //     ]);
    // }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom'=> ['required','string','max:255'],
            'description'=> ['required','string'],
            'tarif'=> ['required','numeric'],
        ]);

        Service::create($validated);

        return redirect()->route('ajout_service')->with('success', 'Service ajouté avec succès.');
    }
}
