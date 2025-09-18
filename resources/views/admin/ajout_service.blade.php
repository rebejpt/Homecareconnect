@extends('layouts.app2')

@section('title','Admin Dashboard')

@section('content')



 <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create a service</h1>
                            </div>

                             <form method="POST" action="{{ route('ajout_service.store') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="string" name="nom" class="form-control form-control-user" placeholder="Nom">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="description" class="form-control form-control-user" placeholder="Description">
                                </div>

                                <div class="form-group">
                                    <input type="number" step="0.01" name="tarif" class="form-control form-control-user" placeholder="Tarif">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Service
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