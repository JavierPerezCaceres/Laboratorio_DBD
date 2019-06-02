<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::all();
        return $address;
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
        $verifyAddress = Address::find($request->id);

        if( $verifyAddress == null ){
            $address = new Address();

            $street = $request->street;
            $number = $request->number;
            $district_id = $request->district_id;
            $user_id = $request->user_id;

            if( !(is_numeric($street)) and !(is_numeric($number)) ){
                Address::create([
                    'street' => $street,
                    'number' => $number,
                    'district_id' => $district_id,
                    'user_id' => $user_id
                ]);
            }else{
                return "Error en los parámetros ingresados";
            }
        }else{
            return "Error al ingresar Dirección, llave primaria ya existente";
        }
        return Address::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        if($address == null){
            return "No se ha encontrado la Dirección";
        }
        else{
            return $address;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $verifyAddress = Address::find($request->id);

        if( $verifyAddress != null ){
            $address = new Address();

            $street = $request->street;
            $number = $request->number;
            $district_id = $request->district_id;
            $user_id = $request->user_id;

            if( !(is_numeric($street)) and !(is_numeric($number)) ){
                $address->updateOrCreate([
                    'id' => $request->id
                ],[
                    'street' => $street,
                    'number' => $number,
                    'district_id' => $district_id,
                    'user_id' => $user_id
                ]);
            }else{
                return "Error en los parámetros ingresados";
            }
        }else{
            return "Error al ingresar Dirección, llave primaria no existente";
        }
        return Address::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($address == null){
            return "No se ha encontrado la Dirección a eliminar";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $address->delete();
            return "Se ha eliminado la Dirección";
        }
    }
}
