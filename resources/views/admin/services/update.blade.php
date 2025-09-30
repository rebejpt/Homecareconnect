@extends('layouts.app2')

@section('title','Liste des services')

@section('content')



 <div class="container">
     <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Modifier un service</h1>
            <a href="{{ route('service.list')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                 Retour
            </a>
        </div>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   
                    <div class="col-lg-7">
                        <div class="p-5">
                             <form method="POST" action="{{ route('service.update',$service->id) }}" class="user">
                                @csrf

                                <div class="form-group">
                                    <input type="text" value="{{ $service->nom}}" name="nom" class="form-control form-control-user" placeholder="Nom">
                                </div>

                                <div class="form-group">
                                    <input type="text" value="{{  $service->description}}"  name="description" class="form-control form-control-user" placeholder="Description">
                                </div>

                                <div class="form-group">
                                    <input type="number" step="0.01" value="{{  $service->tarif}}"  name="tarif" class="form-control form-control-user" placeholder="Tarif">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Modifier
                                </button>
                            </form>

                            
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection