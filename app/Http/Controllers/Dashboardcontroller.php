<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    //
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

     public function employeDashboard()
    {
        return view('employe.dashboard');
    }

     public function employeurDashboard()
    {
        return view('employeur.dashboard');
    }
}
