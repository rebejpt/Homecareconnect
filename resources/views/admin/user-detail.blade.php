@extends('layouts.app2')

@section('title','Liste des services')

@section('content')



 <div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Utilisateur</h1>
        <a href="{{{route ('user.list')}}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Retour
        </a>
    </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="">
                                <h1 class="h4 text-gray-900 mb-4">{{ $user->name }}</h1>
                            </div>

                            {{-- Afficher les infos de la table user --}}
                            <p>Email : {{ $user->email }}</p>


                            @if($user->employe)
                                {{-- Afficher les informations de la table employe --}}
                                <p>Service: {{ $user->employe->service->nom }}</p>
                                <p>Telephone: {{ $user->employe->telephone }}</p>
                                <p>Adresse: {{ $user->employe->adresse }}</p>
                                <p>Date de naissance: {{ $user->employe->date_naissance }}</p>
                                <p>Salaire: {{ $user->employe->salaire }}</p>
                                <p>Statut: {{ $user->employe->statut }}</p>
                            @elseif($user->employeur)
                                {{-- Afficher les informations de la table employeur --}}
                            
                            @endif
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection