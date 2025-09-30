<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employe;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users')) ;//la vue qui sera retourner
    }
    public function profileEmploye()
    {
        $user = Auth::user();
        $services = Service::all();
        // $employe = Employe::where('user_id',$userId)->get();
        return view('employe.profile',compact('user','services'));
    }
     public function profileEmployeur()
    {
        $user = Auth::user();
        // $employeur = Employeur::where('user_id',$userId)->get();
        return view('employeur.profile',compact('user'));
    }

    public function getUser($id)
    {
        $user = User::find($id);

        return view('admin.user-detail', compact('user'));
    }
}
