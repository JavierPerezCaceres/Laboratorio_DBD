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
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{ $user->name }}</h2>
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
                                <li class="nav-item">
                                    <a class="nav-link" id="restaurantEdition-tab" data-toggle="tab" href="#restaurantEdition" role="tab" aria-controls="restaurantEdition" aria-selected="false">Edición Restaurants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="userEdition-tab" data-toggle="tab" href="#userEdition" role="tab" aria-controls="userEdition" aria-selected="false">Edición Usuarios</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">


                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                    

                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Nombre</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{ $user->name }}
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nameModal">Cambiar</button>
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
                                            <label style="font-weight:bold;">Contraseña</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#passModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr />
                                </div>
                                <div class="tab-pane fade" id="restaurantRequest" role="tabpanel" aria-labelledby="restaurantRequest-tab">
                                <div class="container">
                                        <div class="row">
                                            <div class="col-sm-2">
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
                                            <div class="col-sm-2">
                                                <label style="font-weight:bold;">Estado</label>
                                            </div>
                                        </div>
                                        <hr/>

                                        @foreach ($requests as $request)
                                        <div class="row">
                                            <div class="col-sm-2">
                                                {{ $request->name }}
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
                                            <div class="col-sm-2">
                                                @if ($request->condition === TRUE)
                                                    Aprobado
                                                @else
                                                    Pendiente
                                                @endif
                                            </div>
                                            <div class="col-sm-1">
                                                <div>
                                                    <button type="button" class="btn btn-success">Información</button>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="restaurantEdition" role="tabpanel" aria-labelledby="restaurantEdition-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label style="font-weight:bold;">Restaurant</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label style="font-weight:bold;">Dueño</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <label style="font-weight:bold;">Código SIS</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <label style="font-weight:bold;">Rut Compañia</label>
                                            </div>
                                        </div>
                                        <hr/>
                                        @foreach ($requests as $request)
                                            @if ($request->condition === TRUE)
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        {{ $request->name }}
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $request->owner_name }}
                                                    </div>
                                                    <div class="col-sm-2">
                                                        {{ $request->cod_sis }}
                                                    </div>
                                                    <div class="col-sm-3">
                                                        {{ $request->company_rut }}
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div>
                                                            <button type="button" class="btn btn-success">Editar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="userEdition" role="tabpanel" aria-labelledby="userEdition-tab">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <label style="font-weight:bold;">Nombre</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <label style="font-weight:bold;">Rol</label>
                                            </div>
                                        </div>
                                        <hr/>
                                        <!--- No se como mezclar la información que tiene usuario con la tabla cliente.--->
                                        @foreach ($users as $user)
                                            @if ( $user->rol_id  != 2)
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        {{ $user->name }}
                                                    </div>
                                                    <div class="col-sm-8">
                                                        @if ( $user->role_id === 1)
                                                            Administrador
                                                        @else
                                                            Cliente
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div>
                                                            <button type="button" class="btn btn-success">Editar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                            @endif
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
                                                <label style="font-weight:bold;">Fecha y Hora</label>
                                            </div>
                                        </div>
                                        <hr/>
                                        @foreach ($records as $record)
                                        <div class="row">
                                            <div class="col-sm-3">
                                                {{ $record->user }}
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

    <!--- Modal para Cambiar la Contraseña de un usuario --->
    <form action="{{ route('updatePassword') }}" method="POST">    
        <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="passModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mypassword" class="control-label">Ingrese Contraseña Actual</label>
                            <input type="password" name="mypassword" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="password" class="control-label">Ingrese Nueva Contraseña</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mypassword" class="control-label">Repita Nueva Contraseña</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit " class="btn btn-success" data-toggle="modal" data-target="#passModal">Cambiar Contraseña</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection