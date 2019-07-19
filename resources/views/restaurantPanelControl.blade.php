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
                                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{$restaurants->name}}</h2>
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
                                    <a class="nav-link" id="menuInfo-tab" data-toggle="tab" href="#menuInfo" role="tab" aria-controls="menuInfo" aria-selected="false">Mis Menus</a>
                                </li>
                            </ul>
                            <div class="tab-content ml-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Nombre Restaurant</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->name}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#nameModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Número de Contacto</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->contact_number}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#phoneModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>       
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Hora de Apertura</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->opening_hour}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#openingHourModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Hora de Cierre</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->closing_hour}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#closingHourModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Coste Por Persona</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->person_cost}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#personCostModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Tiempo de Espera Estimado</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            {{$restaurants->wait_time}}
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#estimatedTimeModal">Cambiar</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-5">
                                            <label style="font-weight:bold;">Comuna</label>
                                        </div>
                                        <div class="col-md-8 col-6">
                                            @foreach ($district as $distri)
                                                {{ $distri->district->name }}
                                                <br/>
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr/>
                                </div>
                                <!--- --->
                                <div class="tab-pane fade" id="menuInfo" role="tabpanel" aria-labelledby="menuInfo-tab">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Menu</label>
                                        </div>
                                        <div class="col-sm-3 col-md-2 col-5">
                                            <label style="font-weight:bold;">Precio</label>
                                        </div>
                                        <div class="col-sm-3 col-md-6 col-6">
                                            <label style="font-weight:bold;">Descuento</label>
                                        </div>
                                    </div>
                                    <hr/>
                                    @foreach ($menus as $menu)
                                        <form action="{{ route('showProductView',$menu->id) }}" method="POST">
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{$menu->name}}
                                                </div>
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{$menu->total_price}}
                                                </div>
                                                <div class="col-sm-3 col-md-6 col-6">
                                                    {{$menu->discount}}
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-success" data-toggle="modal">Editar Menú</button>
                                                </div>
                                            </div>
                                            <hr/>
                                        </form>
                                    @endforeach
                                    <!--- ENDFOREACH--->
                                    <hr/>
                                    <div class="card-title mb-4">
                                        <div class="d-flex justify-content-start">
                                            <div class="col-md-8 col-6">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createMenu">Agregar Menú</button>
                                            </div>
                                            <div class="ml-auto">
                                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
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
    </div>

    <!--- Modal Para Cambio de Nombre--->
    <form name="nameForm" action="{{ route('changeRestaurantName') }}" method="POST" onsubmit="return validateName()"> 
        <div class="modal fade" id="nameModal" tabindex="-1" role="dialog" aria-labelledby="nameModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre de Restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name" class="control-label">Nuevo Nombre de Restaurant</label>
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
    <!--- Modal Para Cambio de Telefono--->
    <form name="telephoneForm" action="{{ route('changeRestaurantPhone') }}" method="POST" onsubmit="return validatePhone()"> 
        <div class="modal fade" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="phoneModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Telefono de Contacto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="phone" class="control-label">Nuevo Telefono de Contacto</label>
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
    <!--- Modal Para Cambio de Hora de Apertura--->
    <form name="openingHourForm" action="{{ route('changeOpeningHour') }}" method="POST" onsubmit="return validateOpeningHour()"> 
        <div class="modal fade" id="openingHourModal" tabindex="-1" role="dialog" aria-labelledby="openingHourModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Hora de Apertura</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="openingHour" class="control-label">Nuevo Horario de Apertura</label>
                            <input type="text" name="openingHour" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Horario de Apertura</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--- Modal Para Cambio de Hora de Cierre--->
    <form name="closingHourForm" action="{{ route('changeClosingHour') }}" method="POST" onsubmit="return validateClosingHour()"> 
    <div class="modal fade" id="closingHourModal" tabindex="-1" role="dialog" aria-labelledby="openingHourModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Hora de Cierre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="closingHour" class="control-label">Nuevo Horario de Cierre</label>
                        <input type="text" name="closingHour" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-success">Cambiar Horario de Cierre</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!--- Modal Para Cambio de Costo por Persona--->
    <form name="personCostForm" action="{{ route('changePersonCost') }}" method="POST" onsubmit="return validatePersonCost()"> 
        <div class="modal fade" id="personCostModal" tabindex="-1" role="dialog" aria-labelledby="personCostModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Costo por Persona</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="personCost" class="control-label">Nuevo Costo por Persona</label>
                            <input type="text" name="personCost" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Costo por Persona</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--- Modal Para Tiempo de Espera Estimado--->
    <form name="estimatedTimeForm" action="{{ route('changeEstimatedTime') }}" method="POST" onsubmit="return validateEstimatedTime()"> 
        <div class="modal fade" id="estimatedTimeModal" tabindex="-1" role="dialog" aria-labelledby="estimatedTimeModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cambiar Tiempo de Espera Estimado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="estimatedTime" class="control-label">Nuevo Tiempo de Espera Estimado</label>
                            <input type="text" name="estimatedTime" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Cambiar Tiempo de Espera Estimado</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--- Modal Para Cambio de Comuna--->
    <div class="modal fade" id="districtModal" tabindex="-1" role="dialog" aria-labelledby="districtModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Comuna de Restaurant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="personCost" class="control-label">Nueva Comuna del Restaurant</label>
                        <select class="form-control" name="district_id" id="district_id" onChange="habilitar(this.form)">
                            <option value="0" selected="selected">
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-success">Cambiar Comuna del Restaurant</button>
                </div>
            </div>
        </div>
    </div>
    <!--- Modal Para Poder Editar el Menu --->
    <div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto a Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="product_id" class="control-label">Seleccione Producto</label>
                        <select class="form-control" name="product_id" id="product_id" onChange="habilitar(this.form)">
                            <option value="0" selected="selected">
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-success">Agregar Producto al Menu</button>
                </div>
            </div>
        </div>
    </div>

    <!--- Modal Para Poder Crear el Menu --->
    <form name="menuForm" action="{{ route('addMenu') }}" method="POST" onsubmit="return validateMenuCreation()"> 
        <div class="modal fade" id="createMenu" tabindex="-1" role="dialog" aria-labelledby="createMenu" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Menú</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="menuName" class="control-label">Nombre Menú</label>
                            <input type="text" name="menuName" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="menuPrice" class="control-label">Indique un Precio</label>
                            <input type="text" name="menuPrice" class="form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_id1" class="control-label">Seleccione Producto</label>
                            <select class="form-control" name="product1" id="product1" onChange="habilitar(this.form)">
                                <option value="0" selected="selected">
                                    Selecciona tu Producto
                                </option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_id2" class="control-label">Seleccione Producto</label>
                            <select class="form-control" name="product2" id="product2" onChange="habilitar(this.form)">
                                <option value="0" selected="selected">
                                    Selecciona tu Producto
                                </option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_id3" class="control-label">Seleccione Producto</label>
                            <select class="form-control" name="product3" id="product3" onChange="habilitar(this.form)">
                                <option value="0" selected="selected">
                                    Selecciona tu Producto
                                </option>
                                @foreach ($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </select
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                        <button type="submit" class="btn btn-success">Agregar Menú</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--- Modal Para Crear un Producto --->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="productName" class="control-label">Nombre Producto</label>
                        <input type="text" name="productName" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Volver</button>
                    <button type="submit" class="btn btn-success">Agregar Producto</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        function validateName(){
            var name = document.forms["nameForm"]["name"].value;
            if (name == "") {
                alert("Campo de Nombre debe ser llenado.");
                return false;
            }
            else{
                return true;
            }
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

        function validateOpeningHour(){
            var name = document.forms["openingHourForm"]["openingHour"].value;
            if (name == ""){
                alert("Campo de Hora de Apertura debe ser llenado.");
                return false;
            }
            else{
                return true;
            }
        }

        function validateCloseHour(){
            var name = document.forms["closingHourForm"]["closingHour"].value;
            if (name == "") {
                alert("Campo de Hora de Cierre debe ser llenado.");
                return false;
            }
            else{
                return true;
            }
        }

        function validatePersonCost(){
            var name = document.forms["personCostForm"]["personCost"].value;
            var letras = "abcdefghijlmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
            if (name == "") {
                alert("Campo de Costo por Persona debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (letras.indexOf(x.charAt(i)) != -1){
                    alert("Campo de Costo por Persona debe contener sólo números.");
                    return false;
                }
            }
            return true;
        }

        function validateEstimatedTime(){
            var name = document.forms["estimatedTimeForm"]["estimatedTime"].value;
            var letras = "abcdefghijlmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
            if (name == "") {
                alert("Campo de Tiempo Estimado debe ser llenado.");
                return false;
            }
            for(i=0; i<x.length; i++){
                if (letras.indexOf(x.charAt(i)) != -1){
                    alert("Campo de Tiempo Estimado debe contener sólo números.");
                    return false;
                }
            }
            return true;
        }

        function validateMenuCreation(){
            var menuName = document.forms["menuForm"]["menuName"].value;
            var menuPrice = document.forms["menuForm"]["menuPrice"].value;

            if (menuName == "") {
                alert("Campo de Nombre de Menú debe ser llenado.");
                return false;
            }
            else{
                if (menuPrice == ""){
                    alert("Campo de Precio de Menú debe ser llenado.");
                    return false;
                }
                return true;
            }
        }

    </script>
</div>
@endsection