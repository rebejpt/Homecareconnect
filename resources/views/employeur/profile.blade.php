@extends('layouts.app2')

@section('title','Profile Employeur')

@section('content')



 <div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Employeur</h1>
        <a href="{{{route ('employeur.dashboard')}}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Retour
        </a>
    </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ton Profil</h1>
                            </div>

                             <form method="POST" action="{{ route('employeur.add') }}" class="user">
                                @csrf
                                {{-- @dd($employeur)  pour afficher un tableau--}}
                                <input type="hidden" required name="userId" value="{{ $user->id}}" >
                                
                              
                                
                            {{-- id,user_id,type("entreprise","particulier"),nom_entreprise,telephone,adresse ///--}}
                                 <div class="form-group">
                                    <select name="type" id="" class="form-control form-control-user">
                                        <option value="">...</option>
                                        <option value="entreprise">entreprise</option>
                                        <option value="particulier">particulier</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nom_entreprise" class="form-control form-control-user" placeholder="'Nom">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="telephone" class="form-control form-control-user" placeholder="Tel">
                                </div>
                                 <div class="form-group">
                                    <input type="text" name="adresse" class="form-control form-control-user" placeholder="Addresse">
                                </div>

                               

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Enregistrer
                                </button>
                            </form>

                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection