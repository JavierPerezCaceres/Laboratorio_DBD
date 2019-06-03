<?php

namespace App\Http\Controllers;

use App\MenuReservation;
use Illuminate\Http\Request;

class MenuReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuReservation = MenuReservation::all();
        return $menuReservation;
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
        $verifyMenuReservation = MenuReservation::find($request->id);
        if($verifyMenuReservation ==null){
            $menuReservation = new MenuReservation();
            $price = $request->price;
            $quantity = $request->quantity;

            $menu_id = $request->menu_id;
            $purchase_order_id = $request->purchase_order_id;

            if ((is_numeric($price)) and (is_numeric($quantity))) {
                MenuReservation::create([
                    'price'=>$price,
                    'quantity'=>$quantity,
                    'menu_id'=>$menu_id,
                    'purchase_order_id'=>$purchase_order_id,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        else{
            return "Error al ingresar Delivery, llave primaria repetida.";
        }

        return MenuReservation::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuReservation  $menuReservation
     * @return \Illuminate\Http\Response
     */
    public function show(MenuReservation $menuReservation)
    {
        if($menuReservation == null){
            return "No se ha encontrado el Delivery buscado.";
        }
        else{
          return $menuReservation;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuReservation  $menuReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuReservation $menuReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuReservation  $menuReservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuReservation $menuReservation)
    {
        $verifyMenuReservation = MenuReservation::find($request->id);
        if($verifyMenuReservation != null){

            $menuReservation = new MenuReservation();

            $price = $request->price;
            $quantity = $request->quantity;

            $menu_id = $request->menu_id;
            $purchase_order_id = $request->purchase_order_id;

            if (!(is_numeric($price)) and !(is_numeric($quantity))) {
                MenuReservation::updateOrCreate([
                    'id'=> $request->id
                ]
                ,[
                'price'=>$price,
                'quantity'=>$quantity,
                'menu_id'=>$menu_id,
                'purchase_order_id'=>$purchase_order_id,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        else{
            return "Error al actualizar Delivery, llave primaria repetida.";
        }

        return MenuReservation::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuReservation  $menuReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuReservation $menuReservation)
    {
        if($menuReservation == null){
          return "No he encontrado la reservación de menú a eliminar.";
        }
        else{
          $menuReservation->delete();
          return "se ha eliminado la reservación de menú";
        }
    }
}
