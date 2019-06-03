<?php

namespace App\Http\Controllers;

use App\MenuProduct;
use Illuminate\Http\Request;

class MenuProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuProduct = MenuProduct::all();
        return $menuProduct;   
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
        $verifyMenuProduct = MenuProduct::find($request->id);
        if ($verifyMenuProduct == null){

          $menuProduct= new MenuProduct();

          $price = $request->price;

          $menu_id= $request->menu_id;
          $product_id = $request->product_id;

          if((is_numeric($price))){

            MenuProduct::create([
              'price'=>$price,
              'menu_id'=>$menu_id,
              'product_id'=>$product_id,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar MenuProduct, llave primaria repetida.";
        }

        return MenuProduct::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuProduct  $menuProduct
     * @return \Illuminate\Http\Response
     */
    public function show(MenuProduct $menuProduct)
    {
        if($menuProduct == null){
            return "No se ha encontrado el producto de menú buscado.";
        }
        else{
          return $menuProduct;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuProduct  $menuProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuProduct $menuProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuProduct  $menuProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuProduct $menuProduct)
    {
        $verifyMenuProduct = MenuProduct::find($request->id);
        if ($verifyMenuProduct != null){

          $menuProduct= new MenuProduct();

          $price = $request->price;

          $menu_id= $request->menu_id;
          $product_id = $request->product_id;

          if(!(is_numeric($price))){

            MenuProduct::updateOrCreate([
                'id'=>$request->id
            ]
            ,[
              'price'=>$price,
              'menu_id'=>$menu_id,
              'product_id'=>$product_id,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al actualizar MenuProduct, llave primaria repetida.";
        }

        return MenuProduct::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuProduct  $menuProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuProduct $menuProduct)
    {
        if($menuProduct == null){
          return "No he encontrado el producto en menu a eliminar.";
        }
        else{
          $menuProduct->delete();
          return "se ha eliminado el producto del menú";
        }
    }
}
