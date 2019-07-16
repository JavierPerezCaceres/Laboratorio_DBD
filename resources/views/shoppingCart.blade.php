@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div>
    <div class="purchase overflow-auto">
        <!--<div style="min-width: 600px">-->
            <main>
                <div class="row">
                    <div class="col-sm-9 col-xs-9 purchase-info">
                        <h4 class="info-code"><i class="fas fa-shopping-cart" ></i>Carro de Compras</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 table-responsive">
                        <table class="table table-condensed" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center col-xs-1 col-sm-1">#</th>
                                <th class="text-center col-xs-7 col-sm-7">Menu</th>
                                <th class="text-center col-xs-1 col-sm-1">Cantidad</th>
                                <th class="text-center col-xs-3 col-sm-3">Precio/unidad</th>
                                <th class="text-center col-xs-3 col-sm-3">PrecioTotal</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $a=0?>
                          <?php $counter=1?>
                          @foreach ($carrito->all() as $menu)
                          <tr>
                              <td class="col-xs-1 col-sm-1 text-center">{{$counter}}</td>
                              <td class="text-center">{{$menu->name}}</td>
                              <td class="text-center">{{$menu->qty}}</td>
                              <td class="text-right">{{$menu->price}}</td>
                              <?php $a=$a+($menu->price * $menu->qty)?>
                              <td class="text-right">{{$menu->price * $menu->qty}}</td>
                              <?php $counter=$counter+1?>
                          </tr>
                          @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2">
                                    <br>
                                </th>
                                <th class="text-center">Total</th>
                                <th class="text-right">{{$a}}</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if ($a>0)
                    <form>
                    <p><a href="/purchaseOrder/{{$a}}/{{$UI}}/{{$restaurantID}}" class="btn btn-info btn-xs" role="button">Continuar</a>
                    </form>
                    @endif
                    </div>
                </div>
            </main>
        <!--</div>-->
    </div>
</div>
@endsection
