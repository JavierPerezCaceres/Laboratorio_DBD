<?php

namespace App\Http\Controllers;

use App\Valoration;
use Illuminate\Http\Request;

class ValorationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valoration=Valoration::all();
        return $valoration;
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
        $verifyValoration = Valoration::find($request->id);
        if($verifyValoration == null){
            $valoration= new Valoration();

            $score=$request->$score;
            $commentary=$request->$commentary;

            $user_id= Flight::find($request->user_id);
            $restaurant_id= Flight::find($request->$restaurant_id);

            if($user_id != null and $restaurant_id != null and is_numeric(score) and !(is_numeric(commentary))){
              $valoration->updateOrCreate([
                'score'=>$score,
                'commentary'=>$commentary,
                'user_id'=>$request->user_id,
                'restaurant_id'=>$request->restaurant_id
              ]);
            }
            else{
              return "Error en los parametros ingresados.";
            }
        }
        else{
          return "Error al ingresar Valoration, llave primaria repetida.";
        }
        return Valoration::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function show(Valoration $valoration)
    {
      $valoration= Valoration::find($id);

      if($valoration == null){
          return "No se ha encontrado el Valoration buscado.";
      }
      else{
        return $valoration;
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function edit(Valoration $valoration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valoration $valoration)
    {
      $verifyValoration = Valoration::find($request->id);
      if($verifyValoration != null){
          $valoration= new Valoration();

          $score=$request->$score;
          $commentary=$request->$commentary;

          $user_id= Flight::find($request->user_id);
          $restaurant_id= Flight::find($request->$restaurant_id);

          if($user_id != null and $restaurant_id != null and is_numeric(score) and !(is_numeric(commentary))){
            $valoration->updateOrCreate([
                'id'->$request->id
            ],
            [
              'score'=>$score,
              'commentary'=>$commentary,
              'user_id'=>$request->user_id,
              'restaurant_id'=>$request->restaurant_id
            ]);
          }
          else{
            return "Error en los parametros ingresados.";
          }
      }
      else{
        return "Error al actualizar Valoration, llave primaria no existe.";
      }
      return Valoration::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Valoration  $valoration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valoration $valoration)
    {
      $valoration= Valoration::find($id);
      if($valoration == null){
        return "No he encontrado el Valoration a eliminar.";
      }
      else{
        $valoration->delete();
        return "se ha eliminado el Valoration";
      }
    }
}
