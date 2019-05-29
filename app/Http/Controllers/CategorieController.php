<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Categorie::all();
        return $category;
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
        $verifyCategory = Categorie::find($request->id);

		if($verifyCategory == null){

			// Se instancia un objeto del modelo
            $category = new Categorie();
            
			// Se guardan valores en las distintas variables de modelo.
            $name = $request->name;

            // Se realizan las validaciones de los datos.
            if(!(is_numeric($name))){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
				$category->updateOrCreate([
					
				    'name' = $name
	
				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al ingresar Categoria, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return Categorie::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        // Se busca la id de lo que se desea mostrar.
        $category = Categorie::find($id);
        

        if($category == null){
            return "No se ha encontrado la Categoria buscada.";
        }
        else{
            return $category;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyCategory = Categorie::find($request->id);

        if($verifyCategory != null){
 
            // Se instancia un objeto del modelo
            $category = new Categorie();
             
            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
             
            // Se realizan las validaciones de los datos.
            if(!(is_numeric($name))){
                 
                // En caso de pasar las validaciones se actualiza la fila en la tabla.
                $category->updateOrCreate(
                [
 
                    'id' => $request->id
 
                ],
                     
                [
                    'name' => $name
     
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }
         
        else{
            return "Error al actualizar Categoria, llave primaria no existe.";
        }
 
        return Categorie::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {
        // Se busca la id de lo que se desea eliminar.
        $category = Categorie::find($id);

        // Si la id no existe en la tabla, se avisa al usuario.
        if($category == null){
            return "No se ha encontrado la Categoria a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $category->delete();
            return "Se ha eliminado una Categoria.";
        }
    }
}
