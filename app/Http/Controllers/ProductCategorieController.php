<?php

namespace App\Http\Controllers;

use App\ProductCategorie;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategorie $productCategorie)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategorie  $productCategorie
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategorie $productCategorie)
    {
        //
    }
}
