<?php

namespace App\Http\Controllers;

use App\ProductCategorie;
use App\Product;
use App\Categorie;
use Illuminate\Http\Request;

class ProductCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_category = ProductCategorie::all();
        return $product_category;
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
        $verifyProductCategorie = ProductCategorie::find($request->id);

		if($verifyRestaurant == null){

			// Se instancia un objeto del modelo
            $productCategory = new ProductCategorie();

            // Se busca si la llave foranea existe.
            $product_id = Product::find($request->product_id);
            $category_id = Categorie::find($request->category_id);
            
            // Se realizan las validaciones de los datos.
            if($product_id != null and $category_id != null){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
				$productCategory->updateOrCreate([
					
                    'product_id' => $request->product_id,
                    'category_id' => $request->category_id,
	
				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al ingresar ProductoCategoria, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return ProductCategorie::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategorie $productCategorie)
    {
        // Se busca la id de lo que se desea mostrar.
        $productCategory = ProductCategorie::find($id);
        

        if($productCategory == null){
            return "No se ha encontrado el ProductoCategoria buscado.";
        }
        else{
            return $productCategory;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategorie $productCategorie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategorie $productCategorie)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyProductCategorie = ProductCategorie::find($request->id);

		if($verifyRestaurant != null){

			// Se instancia un objeto del modelo
            $productCategory = new ProductCategorie();

            // Se busca si la llave foranea existe.
            $product_id = Product::find($request->product_id);
            $category_id = Categorie::find($request->category_id);
            
            // Se realizan las validaciones de los datos.
            if($product_id != null and $category_id != null){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $productCategory->updateOrCreate(
                [

                    'id' => $request->id
                ],
                
                [
                    'product_id' => $request->product_id,
                    'category_id' => $request->category_id,
	
				]);
			}
			else{
				return "Error en los parametros ingresados.";
			}
        }
        
        else{
            return "Error al actualizar ProductoCategoria, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Restaurant.
        return ProductCategorie::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategorie $productCategorie)
    {
        // Se busca la id de lo que se desea eliminar.
        $productCategory = ProductCategorie::find($id);

        // Si la id no existe en la tabla, se avisa al usuario.
        if($productCategory == null){
            return "No se ha encontrado el ProductoCategoria a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $productCategory->delete();
            return "Se ha eliminado un ProductoCategoria.";
        }
    }
}
