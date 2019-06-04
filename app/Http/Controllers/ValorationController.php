<?php

namespace App\Http\Controllers;

use App\Valoration;
use App\PurchaseOrder;
use Illuminate\Http\Request;

class ValorationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoration=Valoration::all();
        return $valoration;
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
        $verifyValoration = Valoration::find($request->id);
        if($verifyValoration == null){
            $valoration= new Valoration();

            $score=$request->score;
            $comment=$request->commentary;

            $purchase_order_id = $request->purchase_order_id;
            $restaurant_id = $request->restaurant_id;


            if( is_numeric(score) and !(is_numeric(commentary))){
              Valoration::create([
                'score'=>$score,
                'comment'=>$comment,
                'purchase_order_id'=>$purchase_order_id,
                'restaurant_id'=>$restaurant_id,
              ]);
            }
            else{
              return "Error en los parametros ingresados.";
            }
        }
        else{
          return "Error al ingresar Valoracion, llave primaria repetida.";
        }
        return Valoration::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function show(Valoration $valoration)
    {
      if($valoration == null){
          return "No se ha encontrado la valoracion buscada.";
      }
      else{
        return $valoration;
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function edit(Valoration $valoration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valoration $valoration)
    {
      $verifyValoration = Valoration::find($request->id);
      if($verifyValoration != null){
          $valoration= new Valoration();

          $score=$request->score;
          $comment=$request->comment;

          $purchase_order_id = $request->purchase_order_id;
          $restaurant_id = $request->restaurant_id;

          if( is_numeric(score) and !(is_numeric(commentary))){
            $valoration->updateOrCreate([
                'id'->$request->id
            ],
            [
              'score'=>$score,
              'comment'=>$comment,
              'purchase_order_id'=>$purchase_order_id,
              'restaurant_id'=>$restaurant_id,
            ]);
          }
          else{
            return "Error en los parametros ingresados.";
          }
      }
      else{
        return "Error al actualizar valoracion, llave primaria no existe.";
      }
      return Valoration::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valoration $valoration)
    {
      if($valoration == null){
        return "No he encontrado la valoracion a eliminar.";
      }
      else{
        $valoration->delete();
        return "Se ha eliminado la valoracion";
      }
    }


    public function viewComment(Request $request, PurchaseOrder $purchaseOrder, Valoration $valoration)
    {
        $purchaseOrder = PurchaseOrder::where('confirmation','1')->get();

        if($valoration != null)
        {
                return $valoration->comment;
        }

        else {
            return "Error al obtener valoracion, Orden de Compra no encontrada";
        }
    }

    public function updateComment(Request $request, PurchaseOrder $purchaseOrder, Valoration $valoration)
    {

        $purchaseOrder = PurchaseOrder::where('confirmation','1')->get();

        if($purchaseOrder != null){

            $comment = $request->comment;

            // Se realizan las validaciones de los datos.
            if($valoration != null)
            {
                $valoration->updateOrCreate([

                    'id' => $request->id
                ],
                [   
                    'comment' => $comment,
                ]);

            }
            else {
                return "No existen comentarios dado el contexto";
            }
        }

        else {
            return "Error al obtener comentarios, Orden de Compra no encontrada";
        }

        return Valoration::all();
    }

    public function deleteComment(Request $request, PurchaseOrder $purchaseOrder, Valoration $valoration)
    {

        if($purchaseOrder != null){

            $comment = $request->comment;

            // Se realizan las validaciones de los datos.
            if($valoration != null)
            {
                $valoration->updateOrCreate([

                    'id' => $request->id
                ],
                [   
                    'comment' => null,
                ]);

            }
            else {
                return "No existen comentarios dado el contexto";
            }
        }

        else {
            return "Error al obtener comentarios, Orden de Compra no encontrada";
        }
        return Valoration::all();
    }
}
