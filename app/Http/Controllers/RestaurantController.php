<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Se retorna todo el contenido de la tabla restaurant.
        $restaurant = Restaurant::all();
        return $restaurant;
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
        $verifyRestaurant = Restaurant::find($request->id);

		if($verifyRestaurant == null){

			// Se instancia un objeto del modelo
            $restaurant = new Restaurant();
            
			// Se guardan valores en las distintas variables de modelo.
            $category = $request->category;
            $contact_number = $request->contact_number;
            $kitchen_type = $request->kitchen_type;
            $opening_hour = $request->opening_hour;
            $closing_hour = $request->closing_hour;
            $person_cost = $request->person_cost;
            $wait_time = $request->wait_time;
            $direction = $request->direction;

            $user_id = $request->user_id;
            
            // Se realizan las validaciones de los datos.
            if(!(is_numeric($category)) and (is_numeric($contact_number)) and !(is_numeric($kitchen_type))
                and is_numeric($person_cost) and is_numeric($wait_time) and !(is_numeric($direction))){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
				Restaurant::create([
					
				    'category' => $category,
                    'contact_number' => $contact_number,
                    'kitchen_type' => $kitchen_type,
                    'opening_hour' => $opening_hour,
                    'closing_hour' => $closing_hour,
                    'person_cost' => $person_cost,
                    'wait_time' => $wait_time,
                    'direction' => $direction,
					'user_id' => $user_id
	
				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al ingresar Restaurant, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Restaurant::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {  

        if($restaurant == null){
            return "No se ha encontrado el Restaurant buscado.";
        }
        else{
            return $restaurant;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyRestaurant = Restaurant::find($request->id);

		if($verifyRestaurant != null){

			// Se instancia un objeto del modelo
            $restaurant = new Restaurant();
            
			// Se guardan valores en las distintas variables de modelo.
            $category = $request->category;
            $contact_number = $request->contact_number;
            $kitchen_type = $request->kitchen_type;
            $opening_hour = $request->opening_hour;
            $closing_hour = $request->closing_hour;
            $person_cost = $request->person_cost;
            $wait_time = $request->wait_time;
            $direction = $request->direction;

            $user_id = $request->user_id;

            // Se realizan las validaciones de los datos.
            if(!(is_numeric($category)) and (is_numeric($contact_number)) and !(is_numeric($kitchen_type))
                and is_numeric($person_cost) and is_numeric($wait_time) and !(is_numeric($direction))){
                
                // En caso de pasar las validaciones se actualiza la fila en la tabla.
				$restaurant->updateOrCreate([

                    'id' => $request->id
                ],
                    
                [
				    'category' => $category,
                    'contact_number' => $contact_number,
                    'kitchen_type' => $kitchen_type,
                    'opening_hour' => $opening_hour,
                    'closing_hour' => $closing_hour,
                    'person_cost' => $person_cost,
                    'wait_time' => $wait_time,
                    'direction' => $direction,
					'user_id' => $user_id
	
				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al actualizar Restaurant, llave primaria no existe.";
        }

        return Restaurant::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($restaurant == null){
            return "No se ha encontrado el Restaurant a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $restaurant->delete();
            return "Se ha eliminado un Restaurant";
        }
    }

    public function viewDirection(Request $request, Restaurant $restaurant)
     {

         if($restaurant != null){

             // Se realizan las validaciones de los datos.
             if($restaurant->direction)
             {
                 return $restaurant->direction;
             }
             else {
                 return "No existe direccion asociada";
             }
         }

         else {
             return "Error al obtener direccion, Restaurant no encontrado";
         }

     }

    public function updateDirection(Request $request, Restaurant $restaurant)
    {

            if($restaurant != null){

             $direction = $request->direction;

             // Se realizan las validaciones de los datos.
             if($restaurant->direction != null)
             {
                 $restaurant->updateOrCreate([

                     'id' => $request->id
                 ],
                 [   
                     'direction' => $direction,
                 ]);

                 return $restaurant;
             }
             else {
                 return "No existen direccion asociada";
             }
         }

         else {
             return "Error al obtener direccion, Restaurant no encontrado";
         }

        return Restaurant::all();
    }

    public function deleteDirection(Request $request, Restaurant $restaurant)
     {

         if($restaurant != null){

            $direction = $request->direction;

             // Se realizan las validaciones de los datos.
             if($restaurant->direction != null)
             {
                 $restaurant->updateOrCreate([

                     'id' => $request->id
                 ],
                 [   
                     'direction' => null,
                 ]);

                 return $purchaseOrder;
             }
             else {
                 return "No existen direccion asociada";
             }
         }

         else {
             return "Error al obtener direccion, Restaurant no encontrado";
         }

     }
}
