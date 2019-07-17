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
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nameModal">Cambiar</button>
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
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#lastNameModal">Cambiar</button>
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
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#emailModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Teléfono</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $client->phone }}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#phoneModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Contraseña</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#passModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                
                                <div class="tab-pane fade" id="userDirections" role="tabpanel" aria-labelledby="userDirections-tab">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <label style="font-weight:bold;">Calle</label>
                                        </div>
                                        <div class="col-md-2 col-6">
                                            <label style="font-weight:bold;">Número</label>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <label style="font-weight:bold;">Comuna</label>
                                        </div>
                                    </div>
                                    @foreach ($addresses as $address)
                                    <form action="{{ route('deleteDirection') }}" method="DELETE">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3 col-5">
                                                <label style="font-weight:bold;">Direccion</label>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                <label class="input_tag" for="firstName" name="street">{{ $address->street }}</label>
                                            </div>
                                            <div class="col-md-2 col-6">
                                                {{ $address->number }}
                                            </div>
                                            <div class="col-md-3 col-6">
                                                {{ $address->district_id }}
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success">Quitar Dirección</button>
                                            </div>
                                        </div>
                                        <hr/>
                                    </form>   
                                    @endforeach
                                        <hr/>
                                        <div class="card-title mb-4">
                                            <div class="d-flex justify-content-start">
                                                <div class="col-md-8 col-6">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#directionModal">Agregar Dirección</button>
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
    <!-- Modal Para Agregar Dirección-->
    <form action="{{ route('addDirection') }}" method="POST">
        @csrf
        <div class="modal fade" id="directionModal" tabindex="-1" role="dialog" aria-labelledby="directionModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregando Dirección</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="street" class="control-label">Nombre de la Calle</label>
                            <input type="text" name="street" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="number" class="control-label">Número de domicilio</label>
                            <input type="text" name="number" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <label for="number" class="control-label">Región</label>
                        <select class="form-control" name="ciudad_id" id="ciudad_id" onChange="habilitar(this.form)">
                            <option value="0" selected="selected">
                                Selecciona tu Región
                            </option>
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-body">
                    <label for="number" class="control-label">Comuna</label>
                        <select class="form-control" name="district_id" id="district_id" onChange="habilitar(this.form)">
                            <option value="0" selected="selected">
                                Selecciona tu Comuna
                            </option>
                            @foreach ($districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Agregar Dirección</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- Modal para Cambiar el nombre de un usuario --->
    <form action="{{ route('changeName') }}" method="POST">
        @csrf
        <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre de Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Nuevo Nombre de Usuario</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Nombre</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- Modal para Cambiar el apellido de un usuario --->
    <form action="{{ route('changeLastName') }}" method="POST">
        @csrf
        <div class="modal fade" id="lastNameModal" tabindex="-1" role="dialog" aria-labelledby="lastNameModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Apellido de Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Nuevo Apellido de Usuario</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Apellido</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- Modal para Cambiar el email de un usuario --->
    <form action="{{ route('changeEmail') }}" method="POST">
        @csrf
        <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Email del Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email" class="control-label">Nuevo Email de Usuario</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Email</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- Modal para Cambiar el Telefono de un usuario --->
    <form action="{{ route('changePhone') }}" method="POST">
        @csrf
        <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="phoneModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Telefono del Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="phone" class="control-label">Nuevo Telefono de Usuario</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Telefono</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--- Modal para Cambiar la Contraseña de un usuario --->
    <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="passModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Telefono del Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                Tengo que averiguar aún lo de como encripta Laravel pero gg izi
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection