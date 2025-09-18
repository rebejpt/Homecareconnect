<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
     //
    public function getServices()
    {
        $services = Service::all();
        return view('admin.services', compact('services')) ;//la vue qui sera retourner
    }
}
