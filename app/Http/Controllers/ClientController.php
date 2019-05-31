<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::all();
        return $client;
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
        $verifyClient = Client::find($request->id);

        if($verifyClient == null){

            // Se instancia un objeto del modelo
            $client = new Client();
            
            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $lastname = $request->lastname;
            $phone = $request->phone;

            // Se busca si la llave foranea existe.
            //$user_id = Client::find($request->user_id);
            
            // Se realizan las validaciones de los datos.
            if( !(is_numeric($name)) and !(is_numeric($lastname)) and !(is_numeric($phone)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $client->updateOrCreate([
                    
                    'name' => $name,
                    'lastname' => $lastname,
                    'phone' => $phone,
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Cliente, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return Client::all();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        if($client == null){
            return "No se ha encontrado el Cliente buscado.";
        }
        else{
            return $client;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $verifyClient = Client::find($request->id);

        if($verifyClient != null){

            // Se instancia un objeto del modelo
            $client = new Client();
            
            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $lastname = $request->lastname;
            $phone = $request->phone;

            // Se busca si la llave foranea existe.
            // $user_id = Flight::find($request->user_id);
            
            // Se realizan las validaciones de los datos.
            if(//$user_id != null and 
                !(is_numeric($name)) and !(is_numeric($lastname)) and (is_numeric($phone)))
            {
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $client->updateOrCreate([

                    'id' => $request->id,
                ],
                    
                [
                    'name' => $name,
                    'lastname' => $lastname,
                    'phone' => $phone,
    
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
        
        else{
            return "Error al ingresar Cliente, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return Client::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($client == null){
            return "No se ha encontrado el Cliente a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $client->delete();
            return "Se ha eliminado un Cliente";
        }
    }
}
