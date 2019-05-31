<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_order = PurchaseOrder::all();

        return $purchase_order;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyPurchaseOrder = PurchaseOrder::find($request->id);

        if($verifyPurchaseOrder == null){

            // Se instancia un objeto del modelo
            $purchase_order = new PurchaseOrder();
            
            // Se guardan valores en las distintas variables de modelo.
            $amount = $request->amount;
            $delivery_method = $request->delivery_method;
            $purchase_type = $request->purchase_type;
            $confirmation = $request->$confirmation;
            $observations = $request->$observations;

            // Se busca si la llave foranea existe.
            $user_id = PurchaseOrder::find($request->user_id);
            
            // Se realizan las validaciones de los datos.
            if($user_id != null and (is_numeric($amount)) and !(is_numeric($delivery_method)) and !(is_numeric($purchase_type)) and (is_numeric($confirmation) and !(is_numeric($observations))))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $purchase_order->updateOrCreate([
                    
                    'amount' => $amount,
                    'delivery_method' => $delivery_method,
                    'purchase_type' => $purchase_type,
                    'confirmation' => $confirmation,
                    'observations' => $observations,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Orden de Compra, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PurchaseOrder::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        if($purchaseOrder == null){
            return "No se ha encontrado la Orden de Compra buscada.";
        }
        else{
            return $purchaseOrder;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verify= PurchaseOrder::find($request->id);

        if($verifyPurchaseOrder != null){

            // Se instancia un objeto del modelo
            $purchase_order = new PurchaseOrder();
            
            // Se guardan valores en las distintas variables de modelo.
            $amount = $request->amount;
            $delivery_method = $request->delivery_method;
            $purchase_type = $request->purchase_type;
            $confirmation = $request->$confirmation;
            $observations = $request->$observations;

            // Se busca si la llave foranea existe.
            $user_id = PurchaseOrder::find($request->user_id);
            
            // Se realizan las validaciones de los datos.
            if($user_id != null and (is_numeric($amount)) and !(is_numeric($delivery_method)) and !(is_numeric($purchase_type)) and (is_numeric($confirmation) and !(is_numeric($observations))))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $purchaseOrder->updateOrCreate([

                    'id' => $request->id
                ],
                [   
                    'amount' => $amount,
                    'delivery_method' => $delivery_method,
                    'purchase_type' => $purchase_type,
                    'confirmation' => $confirmation,
                    'observations' => $observations,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Orden de Compra, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PurchaseOrder::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($purchaseOrder == null){
            return "No se ha encontrado la Orden de Compra a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $purchaseOrder->delete();
            return "Se ha eliminado una Orden de Compra";
        }
    }
}
