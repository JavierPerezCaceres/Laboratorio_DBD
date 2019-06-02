<?php

namespace App\Http\Controllers;

use App\Table;
use App\Restaurant;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table = Table::all();
        return $table;
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
        $verifyTable = Table::find($request->id);

		if($verifyTable == null){

			// Se instancia un objeto del modelo
            $table = new Table();
            
			// Se guardan valores en las distintas variables de modelo.
            $capacity = $request->capacity;
            $number = $request->number;
            $avaible = $request->avaible;
            
            // Se realizan las validaciones de los datos.
            if(is_numeric($capacity) and is_numeric($number) and is_numeric($avaible)){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
				Table::create([
					
				    'capacity' => $capacity,
                    'number' => $number,
                    'avaible' => $avaible

				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al ingresar Mesa, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Table::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        if($table == null){
            return "No se ha encontrado la Mesa buscada.";
        }
        else{
            return $table;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyTable = Table::find($request->id);

		if($verifyTable != null){

			// Se instancia un objeto del modelo
            $table = new Table();
            
			// Se guardan valores en las distintas variables de modelo.
            $capacity = $request->capacity;
            $number = $request->number;
            $avaible = $request->avaible;
            
            // Se realizan las validaciones de los datos.
            if(is_numeric($capacity) and is_numeric($number) and is_numeric($avaible)){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $table->updateOrCreate(
                [
                    'id' => $request->id
                ],
                
                [
					
				    'capacity' => $capacity,
                    'number' => $number,
                    'avaible' => $avaible

				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al actualizar Mesa, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Table::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($table == null){
            return "No se ha encontrado la Mesa a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $table->delete();
            return "Se ha eliminado una Mesa";
        }
    }
}
