<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city = City::all();
        return $city;
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
        $verifyCity = City::find($request->id);

        if($verifyCity == null){

            // Se instancia un objeto del modelo
            $city = new City();

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($name)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                City::create([
                    'name' => $name
                ]);

            }else{
                return "Error en los parámetros ingresados";
            }

        }else{
            return "Error al ingresar Ciudad, llave primaria ya existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return City::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        if($city == null){
            return "No se ha encontrado la Reserva de Mesa buscada.";
        }
        else{
            return $city;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(city $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyCity = City::find($request->id);

        if($verifyCity != null){

            // Se instancia un objeto del modelo
            $city = new City();

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($name)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $city->updateOrCreate([
                    'id' => $request->id
                ],[
                    'name' => $request->name
                ]);

            }else{
                return "Error en los parámetros ingresados";
            }

        }else{
            return "Error al actualizar Ciudad, llave primaria no existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return City::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($city == null){
            return "No se ha encontrado la Ciudad a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $city->delete();
            return "Se ha eliminado la Ciudad";
        }
    }
}
