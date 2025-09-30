@extends('layouts.app2')

@section('title','Liste des services')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{{route ('service.add')}}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
             Ajouter</a>
    </div>

     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Liste des Services</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Tarif</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($services as $service)
                                        <tr>
                                            <td>{{$service->nom}}</td>
                                            <td>{{$service->description}}</td>
                                            <td>{{$service->tarif}}</td>
                                           
                                            <td>
                                                <a href="/admin/services/update/{{$service->id}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                                    Modifier</a>
                                                <a href="{{ route('service.delete',$service->id)}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                    Supprimer</a>
                                            </td>
                                           
                                        </tr>
                                            
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                   

</div>




@endsection