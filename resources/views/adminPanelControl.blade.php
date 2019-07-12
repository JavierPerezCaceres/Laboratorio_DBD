@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Admin Name</h2>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">

                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Mis Datos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pageHistory-tab" data-toggle="tab" href="#pageHistory" role="tab" aria-controls="pageHistory" aria-selected="false">Historial Página</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" id="restaurantRequest-tab" data-toggle="tab" href="#restaurantRequest" role="tab" aria-controls="restaurantRequest" aria-selected="false">Solicitud Restaurant</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">


                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nombre</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Nombre del Administrador
                                            </div>

                                            <div>
                                                <button type="button" class="btn btn-success">Cambiar</button>
                                            </div>
                                        </div>
                                        <hr />       
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                Email Administrador
                                            </div>
                                            
                                            <div>
                                                <button type="button" class="btn btn-success">Cambiar</button>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Contraseña</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <button type="button" class="btn btn-success">Cambiar Contraseña</button>
                                            </div>
                                        </div>
                                        <hr />
                                    </div>


                                    <div class="tab-pane fade" id="restaurantRequest" role="tabpanel" aria-labelledby="restaurantRequest-tab">
                                    

                                    <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label style="font-weight:bold;">Restaurant</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label style="font-weight:bold;">Dueño</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label style="font-weight:bold;">Código SIS</label>
                                                </div>
                                                <div class="col-sm-2">
                                                    <label style="font-weight:bold;">Rut Compañia</label>
                                                </div>
                                            </div>
                                            <hr/>

                                            @foreach ($requests as $request)
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    No lo tenemos.
                                                </div>
                                                <div class="col-sm-2">
                                                    {{ $request->owner_name }}
                                                </div>
                                                <div class="col-sm-2">
                                                    {{ $request->cod_sis }}
                                                </div>
                                                <div class="col-sm-2">
                                                    {{ $request->company_rut }}
                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <button type="button" class="btn btn-success">Aceptar</button>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div>
                                                        <button type="button" class="btn btn-danger">Rechazar</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            @endforeach

                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="pageHistory" role="tabpanel" aria-labelledby="pageHistory-tab">
                                        
                                        
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <label style="font-weight:bold;">Usuario</label>
                                                </div>
                                                <div class="col-sm-7">
                                                    <label style="font-weight:bold;">Acción</label>
                                                </div>
                                                <div class="col-sm">
                                                    <label style="font-weight:bold;">Hora</label>
                                                </div>
                                            </div>
                                            <hr/>
                                            
                                            @foreach ($records as $record)
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    No sé si esto va.
                                                </div>
                                                <div class="col-sm-7">
                                                    {{ $record->action }}
                                                </div>
                                                <div class="col-sm">
                                                    {{ $record->created_at}}
                                                </div>
                                            </div>
                                            <hr/>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection