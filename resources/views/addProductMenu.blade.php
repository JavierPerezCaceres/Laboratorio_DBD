@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title mb-4">
                        <div class="d-flex justify-content-start">
                            <div class="userData ml-3">
                                <h2 class="d-block" style="font-size: 2.0rem; font-weight: bold">{{ $menu->name }}</h2>
                            </div>
                            
                            <div class="ml-auto">
                                <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        <hr/>
                        <hr/>
                        <H2><label style="font-weight:bold;">El Menú contiene los siguientes productos:</label></H2>
                        <hr/>
                        <hr/>
                        @foreach($products_id as $product_id)
                            <div class="row">
                                <div class="col-sm-5 col-md-8 col-5">
                                <H2><label style="font-weight:bold;">{{$product_id->product->name}}</label></H2>
                                </div>
                            </div>
                            <hr/>
                        @endforeach
                        <hr/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form name="directionForm" action="{{ route('addProductMenu',$menu) }}" method="POST">
                                <H2><label style="font-weight:bold;">Agrega un nuevo producto a tu menú</label><H2>
                                <hr/>
                                <hr/>
                                <select class="form-control" name="product_id" id="product_id" onChange="habilitar(this.form)">
                                    <option value="0" selected="selected">
                                        Selecciona tu Producto.
                                    </option>
                                    @foreach ($all_products as $all_product)
                                        <option value="{{$all_product->id}}">{{$all_product->name}}</option>
                                    @endforeach
                                </select>
                                <hr/>
                                <hr/>
                                <button type="submit" class="btn btn-success">Agregar Producto.</button>
                            <form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection