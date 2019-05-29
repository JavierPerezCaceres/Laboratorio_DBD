<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery = Delivery::all();
        return $delivery;
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
        $verifyDelivery=Delivery::find($request->id);
        if ($verifyDelivery == null){

          $delivery= new Delivery();

          $receptor_name = $request->$receptor_name;
          $contact_number= $request->$contact_number;
          $extra_wait_time= $request->extra_wait_time;
          $delivery_address= $request->delivery_address;

          $restaurant_id=Flight::find($request->restaurant_id);

          if($restaurant_id != null and !(is_numeric($receptor_name)) and !(is_numeric($contact_number)) and is_numeric($extra_wait_time) and !(is_numeric($delivery_address))){
            $delivery->updateOrCreate([
              'receptor_name'=$receptor_name,
              'contact_number'=$contact_number,
              'extra_wait_time'=$extra_wait_time,
              'delivery_address'=$delivery_address,
              'restaurant_id' => $request->restaurant_id
            ]);
          }
          else{
            return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar Delivery, llave primaria repetida.";
        }

        return Delivery::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function show(Delivery $delivery)
    {
        $delivery= Delivery::find($id);

        if($delivery == null){
            return "No se ha encontrado el Delivery buscado.";
        }
        else{
          return $delivery;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function edit(Delivery $delivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delivery $delivery)
    {
        $verifyDelivery = Delivery::find($request->id);

        if($verifyDelivery != null){

          $delivery= new Delivery();

          $receptor_name = $request->receptor_name;
          $contact_number=$request->contact_number;
          $extra_wait_time=$request->extra_wait_time;
          $delivery_address=$request->delivery_address;

          $restaurant_id= Flight::find($request->restaurant_id);

          
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delivery  $delivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delivery $delivery)
    {
        //
    }
}
