<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //methode qui va nous renvoyer la page d'acceuil
    public function acceuil()
    {
        return view('dashboard2'); //view car ca va chercher acceuil notre page dans ce repertoire
    }
    public function about()
    {
        return view('about');
    }
}
