<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
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
        $verifyCategory = Category::find($request->id);

		if($verifyCategory == null){

			// Se instancia un objeto del modelo
            $category = new Category();
            
			// Se guardan valores en las distintas variables de modelo.
            $name = $request->name;

            // Se realizan las validaciones de los datos.
            if(!(is_numeric($name))){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
				$category->updateOrCreate([
					
				    'name' => $name
	
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
        return Category::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
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
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyCategory = Category::find($request->id);

        if($verifyCategory != null){
 
            // Se instancia un objeto del modelo
            $category = new Category();
             
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
 
        return Category::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
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
