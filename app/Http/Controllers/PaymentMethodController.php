<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use App\CardPayment;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment_method = PaymentMethod::all();

        return $payment_method;
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
        $verifyPaymentMethod = PaymentMethod::find($request->id);

        if($verifyPaymentMethod == null){

            // Se instancia un objeto del modelo
            $payment_method = new PaymentMethod();
            
            // Se guardan valores en las distintas variables de modelo.
            $payment_type = $request->payment_type;
            $card_payment_id = $request->card_payment_id;
            
            // Se realizan las validaciones de los datos.
            if((is_numeric($payment_type)) and (is_numeric($card_payment_id)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                PaymentMethod::create([
                    
                    'payment_type' => $payment_type,
                    'card_payment_id' => $card_payment_id,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Medio de pago, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PaymentMethod::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentMethod $paymentMethod)
    {
        if($paymentMethod == null){
            return "No se ha encontrado el Medio de pago buscado.";
        }
        else{
            return $paymentMethod;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyPaymentMethod = PaymentMethod::find($request->id);

        if($verifyPaymentMethod != null){

            // Se instancia un objeto del modelo
            $payment_method = new PaymentMethod();
            
            // Se guardan valores en las distintas variables de modelo.
            $payment_type = $request->payment_type;
            $card_payment_id = $request->card_payment_id;

            
            // Se realizan las validaciones de los datos.
            if((is_numeric($payment_type)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $payment_type->updateOrCreate([

                    'id' => $request->id
                ],
                [
                    
                    'payment_type' => $payment_type,
                    'card_payment_id' => $card_payment_id,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Medio de pago, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PaymentMethod::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaymentMethod  $paymentMethod
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentMethod $paymentMethod)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($paymentMethod == null){
            return "No se ha encontrado el Medio de pago a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $paymentMethod->delete();
            return "Se ha eliminado un Medio de pago";
        }
    }
}
