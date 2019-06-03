<?php

namespace App\Http\Controllers;

use App\ProductIngredient;
use Illuminate\Http\Request;

class ProductIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productIngredient = ProductIngredient::all();
        return $productIngredient;
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
        $verifyProductIngredient = ProductIngredient::find($request->id);
        if ($verifyProductIngredient == null){

          $productIngredient= new ProductIngredient();

          $product_id = $request->product_id;
          $ingredient_id= $request->ingredient_id;

          if( (is_numeric($product_id)) and (is_numeric($ingredient_id))){
            ProductIngredient::create([
              'product_id'=>$product_id,
              'ingredient_id'=>$ingredient_id,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar ingrediente de producto, llave primaria repetida.";
        }

        return ProductIngredient::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductIngredient  $productIngredient
     * @return \Illuminate\Http\Response
     */
    public function show(ProductIngredient $productIngredient)
    {
        if($productIngredient == null){
            return "No se ha encontrado el ingrediente de producto buscado.";
        }
        else{
          return $productIngredient;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductIngredient  $productIngredient
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductIngredient $productIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductIngredient  $productIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductIngredient $productIngredient)
    {
        $verifyProductIngredient = ProductIngredient::find($request->id);
        if ($verifyProductIngredient != null){

          $productIngredient= new ProductIngredient();

          $product_id = $request->product_id;
          $ingredient_id= $request->ingredient_id;

          if( (is_numeric($product_id)) and (is_numeric($ingredient_id))){
            ProductIngredient::updateOrCreate([
                'id'=>$request->id
            ]
            ,[
              'product_id'=>$product_id,
              'ingredient_id'=>$ingredient_id,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al actualizar ingrediente de producto, llave primaria repetida.";
        }

        return ProductIngredient::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductIngredient  $productIngredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductIngredient $productIngredient)
    {
        if($productIngredient == null){
          return "No he encontrado el ingrediente de producto a eliminar.";
        }
        else{
          $productIngredient->delete();
          return "se ha eliminado el ingrediente de producto";
        }
    }
}
