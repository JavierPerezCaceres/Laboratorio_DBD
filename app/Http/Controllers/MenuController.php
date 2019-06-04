<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return $menu;
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
        $request->validate([
            'name' => 'required',
            'total_price' => 'required',
            'discount' => 'required',
            'restaurant_id' => 'required',
        ]);
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyMenu = Menu::find($request->id);

        if($verifyMenu == null){

            // Se instancia un objeto del modelo
            $menu = new Menu();
            
            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $total_price = $request->total_price;
            $discount = $request->discount;

            // Se busca si la llave foranea existe.
            $restaurant_id = $request->restaurant_id;
            
            // Se realizan las validaciones de los datos.
            //if($restaurant_id != null and !(is_numeric($total_price)) and !(is_numeric($discount)) ){
            if((is_numeric($total_price)) and (is_numeric($discount)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $menu->updateOrCreate([
                    
                    'name' => $name,
                    'total_price' => $total_price,
                    'discount' => $discount,
                    'restaurant_id' => $restaurant_id
    
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar menú, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Menu::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return $menu;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyMenu = Menu::find($request->id);

        if($verifyMenu != null){

            // Se instancia un objeto del modelo
            $menu = new Menu();
            
            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $total_price = $request->total_price;
            $discount = $request->discount;

            // Se busca si la llave foranea existe.
            $restaurant_id = $request->restaurant_id;
            
            // Se realizan las validaciones de los datos.
            //if($restaurant_id != null and !(is_numeric($total_price)) and !(is_numeric($discount)) ){
            if((is_numeric($total_price)) and (is_numeric($discount)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $menu->updateOrCreate(
                [

                    'id' => $request->id
                ],

                [
                    'name' => $name,
                    'total_price' => $total_price,
                    'discount' => $discount,
                    'restaurant_id' => $restaurant_id
    
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al actualizar Menu, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Menu::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($menu == null){
            return "No se ha encontrado el menu a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $menu->delete();
            return "Se ha eliminado un Menu";
        }
    }

    public function viewProductMenu(Menu $menu)
    {
        //Reviso si la id ingresada existe
        $menu = Menu::findOrFail($menu->id);

        //Guardo una lista con los productos asociados a la id de menu encontrada.
        $listaRelacion = $menu->menuProduct;

        //Genero una pila de productos
        $listaProductos = array();

        foreach ($listaRelacion as $product) {
            //Saco la id del producto
            $id = $product->product_id;
            //Busco el producto encontrado
            $product = Product::findOrFail($id);

            if (!in_array($product,$listaProductos)) 
            {
                //Agregar al array de productos
                array_push($listaProductos,$product);
            }
        }
        return $listaProductos;
    }

    public function deleteProductMenu(Menu $menu, Product $product)
    {
        if($menu != null)
        {

            $product_id = $request->product_id;

            // Se realizan las validaciones de los datos.
            if($restaurant_id !=null)
            {
                $table->updateOrCreate([

                    'id' => $request->id
                ],
                [   
                    'restaurant_id' => $restaurant_id,
                ]);

            }
            else {
                return "No existen mesas asociadas al restaurant";
            }
        }
        else {
            return "Error al obtener Menu, producto no encontrado";
        }

        return Menu::all();
    }
}
