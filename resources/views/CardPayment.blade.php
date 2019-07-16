@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="abs-center">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('cardPayment',['UI'=>$UI ,'precio'=>$precio , 'clientNumber'=> $data['client_number'] , 'clientName' => $data['client_name'] , 'clientLastname' => $data['client_lastname'] , 'delivery'=>$data['delivery_method'] , 'address' => $data['address'], 'restaurantID' => $restaurantID]) }}">
                      <div class="form-group">
                          <label for="cardNumber"> Numero de tarjeta</label>
                          <div class="input-group">
                              <input type="text" name ="cardNumber" class="form-control" id="cardNumber" placeholder="Numero de Tarjeta"
                                  required autofocus />
                              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="autorizationCode">
                              Codigo de autorización</label>
                          <div class="input-group">
                              <input type="password" class="form-control" id="autorizationCode" name="autorizationCode" placeholder="Codigo de Autorización"
                                  required autofocus />
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="expiration_date">Fecha de expiración</label>
                          <div class="input-group">
                              <input type="text" class="form-control" id="expiration_date" name="expiration_date" placeholder="Ej: 2000-10"
                                  required autofocus />
                          </div>
                      </div>


                      <div class="form-group">
                        <label for="AccountType">Tipo de cuenta</label>
                        <div class="input-group">
                          <select id="AccountType" name="AccountType" class="form-control">
                            <option value="1">Debito</option>
                            <option value="2">Credito</option>
                          </select>
                        </div>
                      </div>

                      <ul class="nav nav-pills nav-stacked center">
                          <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span>{{$precio}}</span> Pago Final</a>
                          </li>
                      </ul>
                      <br/>
                      <button type="submit" class="btn btn-success btn-lg btn-block" onclick=>Pay</a>
                  </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
