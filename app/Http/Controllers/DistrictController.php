<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district = District::all();
        return $district;
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
        $verifyDistrict = District::find($request->id);

        if($verifyDistrict == null){

            // Se instancia un objeto del modelo
            $district = new District();

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $city_id = $request->city_id;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($name)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                District::create([
                    'name' => $name,
                    'city_id' => $city_id
                ]);

            }else{
                return "Error en los parámetros ingresados.";
            }

        }else{
            return "Error al ingresar Comuna, llave primaria ya existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return District::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function show(District $district)
    {
        if($district == null){
            return "No se ha encontrado el Usuario buscado";
        }
        else{
            return $district;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyDistrict = District::find($request->id);

        if($verifyDistrict != null){

            // Se instancia un objeto del modelo
            $district = new District();

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $city_id = $request->city_id;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($name)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $district->updateOrCreate([
                    'id' => $request->id
                ],[
                    'name' => $name,
                    'city_id' => $city_id
                ]);

            }else{
                return "Error en los parámetros ingresados.";
            }

        }else{
            return "Error al actualizas Comuna, llave primaria no existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return District::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\District  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        if( $district == null ){
            return "No se ha encontrado la comuna a eliminar";
        }else{
            $district->delete();
            return "Se ha eliminado la comuna";
        }
    }
}
