<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
<<<<<<< HEAD
    //fonction pour avoir la liste des services
    public function getServices()
    {
        $services = Service::all();
        return view('admin.services.list', compact('services')) ;//la vue qui sera retourner
    }

    //fonction pour ajouter les services
    public function addServices()
    {
        return view('admin.services.add');
    }

    //fonction pour enregistrer les services dans la BDD
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'tarif' => 'required',
        ]);

        Service::create($validated);

        return redirect()->route('service.list');
    }

    //recuperer les donnes avant modification
    public function getUpdate($id)
    {
        $service = Service::find($id);

        return view('admin.services.update',compact('service'));
    }

    //fonction pour modifier un service par son id
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'tarif' => 'required',
        ]);

        $service = Service::find($id);

        $service->nom = $request->nom;
        $service->description = $request->description;
        $service->tarif = $request->tarif;

        $service->save();

        return redirect()->route('service.list');
    }

    //la fonction pour effacer a partir d'un id
    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect()->route('service.list');
    }

=======
     //
    public function getServices()
    {
        $services = Service::all();
        return view('admin.services', compact('services')) ;//la vue qui sera retourner
    }
>>>>>>> 598353f290c1c58beeb1ed45306e4ef2cf1c3900
}
