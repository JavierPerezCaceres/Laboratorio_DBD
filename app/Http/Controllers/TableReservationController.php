<?php

namespace App\Http\Controllers;

use App\TableReservation;
use App\Table;
use App\PurchaseOrder
use Illuminate\Http\Request;

class TableReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableReservation = TableReservation::all();
        return $tableReservation;
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
        $verifyTableReservation = TableReservation::find($request->id);

        if($verifyTableReservation == null){
 
            // Se instancia un objeto del modelo
            $tableReservation = new Table();
         
            // Se guardan valores en las distintas variables de modelo.
            $reserve_number = $request->capacity;
            $reserve_name = $request->reserve_name;
            $people_quantity = $request->people_quantity;
            $reserve_date = $request->reserve_date;
            $reserve_hour = $request->reserve_hour;
            $reserve_confirmation = $request->reserve_confirmation;
 
            // Se busca si la llave foranea existe.
            $table_id = Table::find($request->table_id);
            $purchase_order_id = PurchaseOrder::find($request->purchase_order_id);
             
            // Se realizan las validaciones de los datos.
            if($table_id != null and purchase_order_id != null and is_numeric($people_quantity) and is_numeric($capacity) and !(is_numeric($reserve_name))){
                 
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $restaurant->updateOrCreate([
                     
                    'reserve_number' => $reserve_number,
                    'reserve_name' => $reserve_name,
                    'people_quantity' => $people_quantity,
                    'reserve_date' => $reserve_date,
                    'reserve_hour' => $reserve_hour,
                    'reserve_confirmation' => $reserve_confirmation,
                    'table_id' => $request->table_id,
                    'purchase_order_id' => $request->purchase_order_id
 
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
         
        else{
             return "Error al ingresar Reserva de Mesa, llave primaria repetida.";
        }
 
        // Se muestran todos el contenido de la tabla Restaurant.
        return TableReservation::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TableReservation  $tableReservation
     * @return \Illuminate\Http\Response
     */
    public function show(TableReservation $tableReservation)
    {
        // Se busca la id de lo que se desea mostrar.
        $tableReservation = TableReservation::find($id);
        
        if($tableReservation == null){
            return "No se ha encontrado la Reserva de Mesa buscada.";
        }
        else{
            return $tableReservation;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TableReservation  $tableReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(TableReservation $tableReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TableReservation  $tableReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableReservation $tableReservation)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyTableReservation = TableReservation::find($request->id);

        if($verifyTableReservation != null){
 
            // Se instancia un objeto del modelo
            $tableReservation = new Table();
         
            // Se guardan valores en las distintas variables de modelo.
            $reserve_number = $request->capacity;
            $reserve_name = $request->reserve_name;
            $people_quantity = $request->people_quantity;
            $reserve_date = $request->reserve_date;
            $reserve_hour = $request->reserve_hour;
            $reserve_confirmation = $request->reserve_confirmation;
 
            // Se busca si la llave foranea existe.
            $table_id = Table::find($request->table_id);
            $purchase_order_id = PurchaseOrder::find($request->purchase_order_id);
             
            // Se realizan las validaciones de los datos.
            if($table_id != null and purchase_order_id != null and is_numeric($people_quantity) and is_numeric($capacity) and !(is_numeric($reserve_name))){
                 
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $restaurant->updateOrCreate(
                [
                    'id' => $request->id
                ],
                
                [
                     
                    'reserve_number' => $reserve_number,
                    'reserve_name' => $reserve_name,
                    'people_quantity' => $people_quantity,
                    'reserve_date' => $reserve_date,
                    'reserve_hour' => $reserve_hour,
                    'reserve_confirmation' => $reserve_confirmation,
                    'table_id' => $request->table_id,
                    'purchase_order_id' => $request->purchase_order_id
 
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
         
        else{
             return "Error al actualizar Reserva de Mesa, llave primaria no existe.";
        }
 
        // Se muestran todos el contenido de la tabla Restaurant.
        return TableReservation::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TableReservation  $tableReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableReservation $tableReservation)
    {
        // Se busca la id de lo que se desea eliminar.
        $tableReservation = TableReservation::find($id);

        // Si la id no existe en la tabla, se avisa al usuario.
        if($tableReservation == null){
            return "No se ha encontrado la Reserva de Mesa a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $tableReservation->delete();
            return "Se ha eliminado una Reserva de Mesa";
        }
    }
}
