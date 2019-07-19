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
                                    <hr/>
                                    @foreach ($addresses as $address)
                                    <form action="{{ route('deleteDirection',$address->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
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
                                                {{ $address->district->name }}
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
    <form name="directionForm" action="{{ route('addDirection') }}" method="POST" onsubmit="return validateDirection()">
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
    <form name="nameForm" action="{{ route('changeName') }}" method="POST" onsubmit="return validateName()">
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
    <form name="lastNameForm" action="{{ route('changeLastName') }}" method="POST" onsubmit="return validateLastNameForm()">
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
    <form name="emailForm" action="{{ route('changeEmail') }}" method="POST" onsubmit="return validateEmail()">
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
    <form name="telephoneForm" action="{{ route('changePhone') }}" method="POST" onsubmit="return validatePhone()">
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
    <form name="passwordForm" action="{{ route('updatePassword') }}" method="POST" onsubmit="return validatePassword()">    
        @csrf
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

    <script type="text/javascript">
        
        function validateLastNameForm(){
            var numeros="0123456789";
            var x = document.forms["lastNameForm"]["name"].value;
            if (x == "") {
                alert("Campo de apellido debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (numeros.indexOf(x.charAt(i)) != -1){
                    alert("Campo de apellido solo debe tener letras.");
                    return false;
                }
            }
            return true;
        }

        function validateName(){
            var numeros="0123456789";
            var x = document.forms["nameForm"]["name"].value;
            if (x == "") {
                alert("Campo de Nombre debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (numeros.indexOf(x.charAt(i)) != -1){
                    alert("Campo de Nombre solo debe tener letras.");
                    return false;
                }
            }
            return true;
        }

        function validateEmail(){
            var letras="0123456789";
            var arroba="@.";
            var x = document.forms["emailForm"]["email"].value;
            if (x == "") {
                alert("Campo de Email debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (arroba.indexOf(x.charAt(i)) != -1){
                    return true;
                }
            }
            alert("Campo de Email necesita caracter @.");
            return false;
        }

        function validatePhone(){
            var x = document.forms["telephoneForm"]["phone"].value;
            var letras = "abcdefghijlmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ"
            var mas = "+";
            if (x == "") {
                alert("Campo de Número de Telefono debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (letras.indexOf(x.charAt(i)) != -1){
                    alert("Campo de Número de Telefono debe respetar el formato de número de Chile.");
                    return false;
                }
            }
            if ("+".indexOf(x.charAt(0)) == 0){
                if(x.length > 12){
                    alert("Número ingresado demasiado largo.");
                    return false;
                }
                if(x.length < 12){
                    alert("Número ingresado demasiado corto.");
                    return false;
                }
                else{
                    return true;
                }
            }
            else{
                alert("Campo de Número de Telefono debe tener el simbolo + al principio.");
                return false;
            }
        }

        function validatePassword(){
            
            var mypassword = document.forms["passwordForm"]["mypassword"].value;
            var password = document.forms["passwordForm"]["password"].value;
            var password_confirmation = document.forms["passwordForm"]["password_confirmation"].value;
        
            if (mypassword == "") {
                alert("Campo de Contraseña Actual debe ser llenado.");
                return false;
            }
            else{
                if(password == ""){
                    alert("Campo de Contraseña Nueva debe ser llenado.");
                    return false;
                }
                else{
                    if(password_confirmation == ""){
                        alert("Campo de Confirmación Contraseña debe ser llenado.");
                        return false;
                    }
                    else{
                        if( (password.localeCompare(password_confirmation)) == 0){
                            return true;
                        }
                        else{
                            alert("Error en la confirmación de la contraseña.");
                            return false;
                        }
                    }
                }
            }
        }

        function validateDirection(){
            var street = document.forms["directionForm"]["street"].value;
            var number = document.forms["directionForm"]["number"].value;

            if (street == "") {
                alert("Campo de Calle debe ser llenado.");
                return false;
            }
            else{
                if (number == ""){
                    alert("Campo de Número debe ser llenado.");
                    return false;
                }
                return true;
            }
        }

    </script>
</div>
@endsection