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
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ $client->name }}</h2>
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
                                    <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Información</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="userDirections-tab" data-toggle="tab" href="#userDirections" role="tab" aria-controls="userDirections" aria-selected="false">Mis Direcciones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="userRequest-tab" data-toggle="tab" href="#userRequest" role="tab" aria-controls="userRequest" aria-selected="false">Mis Pedidos</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Nombre</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $client->name }}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Apellido</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $client->lastname }}
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
                                            {{ $user->email }}
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
                                
                                <div class="tab-pane fade" id="userDirections" role="tabpanel" aria-labelledby="userDirections-tab">
                                    @foreach ($addresses as $address)
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Direccion</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ $address->street}} - {{ $address->number}}
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success">Quitar Dirección</button>
                                            </div>
                                        </div>
                                        <hr/>   
                                        @endforeach

                                        <hr/>
                                        <div class="card-title mb-4">
                                            <div class="d-flex justify-content-start">
                                                <div class="col-md-8 col-6">
                                                    <button type="button" class="btn btn-success">Agregar Dirección</button>
                                                </div>
                                                <div class="ml-auto">
                                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="userRequest" role="tabpanel" aria-labelledby="userRequest-tab">                                        
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <label style="font-weight:bold;">Pedido</label>
                                                </div>
                                                <div class="col-sm">
                                                    <label style="font-weight:bold;">Precio</label>
                                                </div>
                                                <div class="col-sm">
                                                    <label style="font-weight:bold;">Restaurant</label>
                                                </div>
                                                <div class="col-sm">
                                                    <label style="font-weight:bold;">Hora</label>
                                                </div>
                                            </div>
                                            <hr/>
                                            @foreach ($purchaseOrders as $purchaseOrder)
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    {{ $purchaseOrder->observations }}
                                                </div>
                                                <div class="col-sm">
                                                    {{ $purchaseOrder->amount }}
                                                </div>
                                                <div class="col-sm">
                                                    No sé como sacar el restaurant.
                                                </div>
                                                <div class="col-sm">
                                                    {{ $purchaseOrder->created_at }}
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