@extends('layouts.app2')

@section('title','Profile Employé')

@section('content')



 <div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Employé</h1>
        <a href="{{{route ('employe.dashboard')}}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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

                             <form method="POST" action="{{ route('employe.add') }}" class="user">
                                @csrf
                                {{-- @dd($employe)  pour afficher un tableau--}}
                                <input type="hidden" required name="userId" value="{{ $user->id}}" >
                                
                              
                                <div class="mt-12">
                                    <x-input-label  for="service" :value="__('Service')" />
                                    <select class="w-full"  name="service_id" id="service" required>
                                        <option>...</option>
                                        @foreach ($services as $item)
                                        <option value="{{ $item->id }}">{{$item->nom}}</option>
                                            
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('service')" class="mt-2" />
                                </div>

                                <div class="form-group">
                                    <input type="text" name="telephone" class="form-control form-control-user" placeholder="'Tel'">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="adresse" class="form-control form-control-user" placeholder="Addresse">
                                </div>
                                 <div class="form-group">
                                    <input type="date" name="date_naissance" class="form-control form-control-user" placeholder="date de naissance">
                                </div>

                                <div class="form-group">
                                    <input type="number" step="0.01" name="salaire" class="form-control form-control-user" placeholder="Salaire">
                                </div>

                                <div class="form-group">
                                    <select name="statut" id="" class="form-control form-control-user">
                                        <option value="">...</option>
                                        <option value="disponible">disponible</option>
                                        <option value="occuper">occuper</option>
                                        <option value="inactif">inactif</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Enregistrer
                                </button>
                            </form>

                            
                            {{-- <form method="POST" action="{{ route('ajout_service') }}">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="nom">
                                    </div>
                                   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="description">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="decimal" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="tarif">
                                    </div>
                                    
                                </div>
                                <a href="/admin/services" class="btn btn-primary btn-user btn-block">
                                    Register Service
                                </a>
                               
                               
                            </form> --}}
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection