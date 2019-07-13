<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\User;
use App\Category;
use App\Ingredient;
use App\Menu;
use App\CategoryRestaurant;
use App\MenuProduct;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{

    // Start New Controllers
    public function showRestaurant(Restaurant $restaurant){ // Nico
        if($restaurant == null){
            return view('welcome');
        }
        $menus = Menu::select('id', 'name','total_price','discount')->where('restaurant_id',$restaurant->id)->get();

        $menu_productos = MenuProduct::all();
        return view('restaurantView', compact('menus','restaurant'));
    }

    public function search() // Vicho
    {
        $restaurants = Restaurant::all();
        $restaurant_categories = CategoryRestaurant::select('name')->get();
        //$restaurant_categories = Restaurant::select('category')->distinct()->get();
        $product_categories = Category::select('name')->get();
        $ingredients = Ingredient::select('name')->get();
        //sacar valoración
        
        return view('search', compact(
            'restaurants',
            'restaurant_categories',
            'product_categories',
            'ingredients'
        ));
    }    
    // End New Controllers



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
        $verifyRestaurant = Restaurant::find($restaurant->id);

		if($verifyRestaurant != null){

			// Se instancia un objeto del modelo
            
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

                    'id' => $restaurant->id
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

    public function viewLocation(Request $request, Restaurant $restaurant)
     {

         if($restaurant != null){

             // Se realizan las validaciones de los datos.
             if($restaurant->direction)
             {
                 return $restaurant->direction;
             }
             else {
                 return "No existe ubicacion asociada";
             }
         }

         else {
             return "Error al obtener ubicacion, Restaurant no encontrado";
         }

     }

    public function updateLocation(Request $request, Restaurant $restaurant)
    {

        if($restaurant != null){

            $direction = $request->direction;

             // Se realizan las validaciones de los datos.
            if($direction != null)
            {
               $restaurant->updateOrCreate([

                    'id' => $restaurant->id
                ],
                [   
                    'direction' => $direction,
                ]);

            }
            else {
                 return "No existen ubicacion asociada";
            }
         }

        else {
            return "Error al obtener ubicacion, Restaurant no encontrado";
        }

        return Restaurant::all();

    }

    public function deleteLocation(Request $request, Restaurant $restaurant)
     {

        if($restaurant != null){

             // Se realizan las validaciones de los datos.
             if($restaurant->direction != null)
             {
                 $restaurant->updateOrCreate([

                     'id' => $restaurant->id
                 ],
                 [   
                     'direction' => null,
                 ]);
             }
             else {
                 return "No existen ubicacion asociada";
             }
         }

         else {
             return "Error al obtener ubicacion, Restaurant no encontrado";
         }

        return Restaurant::all();

     }
}
