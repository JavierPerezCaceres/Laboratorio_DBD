<?php

namespace App\Http\Controllers;

use App\CardPayment;
use Illuminate\Http\Request;

class CardPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card_payment = CardPayment::all();

        return $card_payment;
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
        return CardPayment::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function show(CardPayment $cardPayment)
    {
        return CardPayment::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(CardPayment $cardPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardPayment $cardPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CardPayment  $cardPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardPayment $cardPayment)
    {
        //
    }
}
