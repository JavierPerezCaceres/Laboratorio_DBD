<?php

namespace App\Http\Controllers;

use App\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredient = Ingredient::all();
        return $ingredient;
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
        $verifyIngredient=Ingredient::find($request->id);
        if ($verifyIngredient == null){

          $delivery= new Ingredient();

          $name = $request->name;

          if( !(is_numeric($name))){
            Ingredient::create([
              'name'=>$name,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar ingrediente, llave primaria repetida.";
        }

        return Ingredient::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        if($ingredient == null){
            return "No se ha encontrado el ingrediente buscado.";
        }
        else{
          return $ingredient;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $verifyIngredient=Ingredient::find($request->id);
        if ($verifyIngredient != null){

          $delivery= new Ingredient();

          $name = $request->name;

          if( !(is_numeric($name))){
            Ingredient::updateOrCreate([
                'id'=>$request->id
            ]
            ,[
              'name'=>$name,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al actualizar ingrediente, llave primaria repetida.";
        }

        return Ingredient::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        if($ingredient == null){
          return "No he encontrado el ingrediente a eliminar.";
        }
        else{
          $ingredient->delete();
          return "se ha eliminado el ingrediente";
        }
    }
}
