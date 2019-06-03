<?php

namespace App\Http\Controllers;

use App\CardPayment;
use Illuminate\Http\Request;

class CardPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card_payment = CardPayment::all();

        return $card_payment;
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
        $verifyCardPayment = CardPayment::find($request->id);

        if($verifyCardPayment == null){

            // Se instancia un objeto del modelo
            $cardPayment = new CardPayment();
            
            // Se guardan valores en las distintas variables de modelo.
            $autorization_code = $request->autorization_code;
            $transaction_code = $request->transaction_code;
            $card_number = $request->card_number;
            $account_type = $request->account_type;
            $expiration_date = $request->expiration_date;

            
            // Se realizan las validaciones de los datos.
            if((is_numeric($autorization_code)) and (is_numeric($transaction_code)) and (is_numeric($card_number)) and (is_numeric($account_type)) and !(is_numeric($expiration_date)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                CardPayment::create([
                    
                    'autorization_code' => $autorization_code,
                    'transaction_code' => $transaction_code,
                    'card_number' => $card_number,
                    'account_type' => $account_type,
                    'expiration_date' => $expiration_date,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Pago con Tarjeta, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return CardPayment::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function show(CardPayment $cardPayment)
    {
        if($cardPayment == null){
            return "No se ha encontrado el Pago con Tarjeta buscado.";
        }
        else{
            return $cardPayment;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(CardPayment $cardPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardPayment $cardPayment)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyCardPayment = CardPayment::find($request->id);

        if($verifyCardPayment != null){

            // Se instancia un objeto del modelo
            $cardPayment = new CardPayment();
            
            // Se guardan valores en las distintas variables de modelo.
            $autorization_code = $request->autorization_code;
            $transaction_code = $request->transaction_code;
            $card_number = $request->card_number;
            $account_type = $request->account_type;
            $expiration_date = $request->expiration_date;

            
            // Se realizan las validaciones de los datos.
            if((is_numeric($autorization_code)) and (is_numeric($transaction_code)) and (is_numeric($card_number)) and !(is_numeric($account_type)) and !(is_numeric($expiration_date)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $cardPayment->updateOrCreate([

                    'id' => $request->id
                ],
                [   
                    'autorization_code' => $autorization_code,
                    'transaction_code' => $transaction_code,
                    'card_number' => $card_number,
                    'account_type' => $account_type,
                    'expiration_date' => $expiration_date,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Pago con Tarjeta, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return CardPayment::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardPayment $cardPayment)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($cardPayment == null){
            return "No se ha encontrado el Pago con Tarjeta a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $cardPayment->delete();
            return "Se ha eliminado un Pago con Tarjeta";
        }
    }
}
