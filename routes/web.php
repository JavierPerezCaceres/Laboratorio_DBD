<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/client','ClientController@index');
Route::get('/card_payment','CardPaymentController@index');
Route::get('/payment_method','PaymentMethodController@index');
Route::get('/purchase_order','PurchaseOrderController@index');




