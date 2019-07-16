@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">



<div class="form-horizontal" >
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form method="POST" action="{{ route('redirect',['UI'=>$UI ,'precio'=>$precio , 'restaurantID' => $restaurantID]) }}">
            <div class="form-group">
              <label class="col-md-4 control-label" for="client_name">Nombre</label>
              <div class="col-md-4">
                <input id="client_name" name="client_name" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="client_lastname">Apellido</label>
              <div class="col-md-4">
                <input id="client_lastname" name="client_lastname" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="client_number">Numero de Telefono</label>
              <div class="col-md-4">
                <input id="client_number" name="client_number" type="text" class="form-control input-md" required="">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="address">Direccion de Entrega</label>
              <div class="col-md-4">
                <input id="address" name="address" type="text" class="form-control input-md" required="">
              </div>
            </div>


              <div class="form-group">
                <label class="col-md-4 control-label" for="payment_method">Metodo de pago</label>
                <div class="col-md-4">
                  <select id="payment_method" name="payment_method" class="form-control">
                    <option value="Efectivo">Efectivo</option>
                    <option value="Cheque Restaurant">Cheque Restaurant</option>
                    <option value="Targeta Crédito/Débito">Tarjeta Crédito/Débito</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" for="delivery_method">Tipo de Compra</label>
                <div class="col-md-4">
                  <select id="delivery_method" name="delivery_method" class="form-control">
                    <option value="1">Delivery</option>
                    <option value="2">Reservar Mesa</option>
                    <option value="3">Retiro en Restaurant</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label" >Precio</label>
                <label  class="col-md-4 control-label">{{$precio}}</label>
              </div>

              <div class="form-group row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          Confirmar
                      </button>
                  </div>
              </div>
          </form>
        </div>
    </div>
</div>
@endsection
