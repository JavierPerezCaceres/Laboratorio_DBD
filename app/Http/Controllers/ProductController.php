<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return $product;
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
        $verifyProduct=Product::find($request->id);
        if ($verifyProduct == null){

          $product= new Product();

          $name = $request->name;

          if( !(is_numeric($name))){

            Product::create([
              'name'=>$name,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al ingresar producto, llave primaria repetida.";
        }

        return Product::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        if($product == null){
            return "No se ha encontrado el producto buscado.";
        }
        else{
          return $product;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $verifyProduct=Product::find($product->id);
        
        if ($verifyProduct != null){

          $name = $request->name;

          if( !(is_numeric($name))){
            Product::updateOrCreate([
                'id'=>$product->id
            ],
            [
              'name'=>$name,
            ]);
          }
          else{
              return "Error en los parametros ingresados.";
          }
        }
        else{
          return "Error al actualizar producto, llave primaria no existe.";
        }

        return Product::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product == null){
          return "No he encontrado el producto a eliminar.";
        }
        else{
          $product->delete();
          return "Se ha eliminado el producto";
        }
    }
}
