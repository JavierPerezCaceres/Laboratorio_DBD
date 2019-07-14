<?php

namespace App\Http\Controllers;

use App\RestaurantRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

class RestaurantRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function page($UI)
    {
     return view('/restaurantRequest',compact('UI'));
    }
    public function index()
    {
        $restaurantRequest= RestaurantRequest::all();
        return $restaurantRequest;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
     {
         $this->validator($request->all())->validate();
         RestaurantRequest::create([
           'company_rut'=>$request->company_rut,
           'cod_sis'=>$request->cod_sis,
           'owner_name'=>$request->owner_name,
           'condition'=> false,
           'user_id'=>$request->UI,
         ]);
         return redirect('');
     }

     protected function validator(array $data)
     {
         return Validator::make($data, [
             'company_rut' => ['required', 'numeric', 'digits:9'],
             'cod_sis' => ['required', 'numeric', 'digits:9'],
             'owner_name' => ['required', 'string', 'max:255',],
         ]);
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $verifyRestaurantRequest=RestaurantRequest::find($request->id);
        if ($verifyRestaurantRequest == null){
          $restaurantRequest= new RestaurantRequest();

          $company_rut= $request->company_rut;
          $cod_sis= $request->cod_sis;
          $owner_name=$request->owner_name;
          $condition=$request->condition;

          if( is_numeric($company_rut) and is_numeric($cod_sis) and !(is_numeric($owner_name)) and is_numeric($condition)){
            RestaurantRequest::create([
              'company_rut'=>$company_rut,
              'cod_sis'=>$cod_sis,
              'owner_name'=>$owner_name,
              'condition'=>$condition,
            ]);
          }
          else{
            return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar Restaurant Request, llave primaria repetida.";
        }
        return RestaurantRequest::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RestaurantRequest  $restaurantRequest
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantRequest $restaurantRequest)
    {
      if($restaurantRequest == null){
          return "No se ha encontrado el Restaurant Request buscado.";
      }
      else{
        return $restaurantRequest;
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RestaurantRequest  $restaurantRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantRequest $restaurantRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RestaurantRequest  $restaurantRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestaurantRequest $restaurantRequest)
    {
        $verifyRestaurantRequest = RestaurantRequest::find($request->id);

        if($verifyRestaurantRequest != null){

          $company_rut= $request->$receptor_name;
          $cod_sis= $request->$cod_sis;
          $owner_name=$request->owner_name;
          $condition=$request->condition;

          if( is_numeric($company_rut) and is_numeric($cod_sis) and !(is_numeric($owner_name)) and is_numeric($condition)){
            $restaurantRequest->updateOrCreate([
              'id'=> $restaurantRequest->id
            ],
            [
              'company_rut'=>$company_rut,
              'cod_sis'=>$cod_sis,
              'owner_name'=>$owner_name,
              'condition'=>$condition,
            ]);
          }
          else{
            return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al actualizar Delivery, llave primaria no existe.";
        }
        return RestaurantRequest::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RestaurantRequest  $restaurantRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantRequest $restaurantRequest)
    {
        if($restaurantRequest == null){
          return "No he encontrado el Restaurant Request a eliminar.";
        }
        else{
          $restaurantRequest->delete();
          return "se ha eliminado el Restaurant Request.";
        }
    }
}
