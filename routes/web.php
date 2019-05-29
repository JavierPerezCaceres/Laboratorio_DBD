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

Route::get('/address', 'AddressController@index');
Route::get('/city', 'CityController@index');
Route::get('/district', 'DistrictController@index');
Route::get('/role', 'RoleController@index');
Route::get('/user', 'UserController@index');

// Categoria.
Route::get('/category', 'CategoryController@index');
Route::get('/category/{category}', 'CategoryController@show');
Route::post('/category', 'CategoryController@store');
Route::put('/category/{category}', 'CategoryController@update');
Route::delete('/category/{category}', 'CategoryController@destroy');

// Menu
Route::get('/menu', 'Menu@index');
Route::get('/menu/{menu}', 'Menu@show');
Route::post('/menu', 'Menu@store');
Route::put('/menu/{menu}', 'Menu@update');
Route::delete('/menu/{menu}', 'Menu@destroy');

// ProductoCategoria.
Route::get('/product_category', 'ProductCategory@index');
Route::get('/product_category/{product_category}', 'ProductCategory@show');
Route::post('/product_category', 'ProductCategory@store');
Route::put('/product_category/{product_category}', 'ProductCategory@update');
Route::delete('/product_category/{product_category}', 'ProductCategory@destroy');

// Restaurant.
Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/{restaurant}', 'RestaurantController@show');
Route::post('/restaurant', 'RestaurantController@store');
Route::put('/restaurant/{restaurant}', 'RestaurantController@update');
Route::delete('/restaurant/{restaurant}', 'RestaurantController@destroy');

// Table.
Route::get('/table', 'TableController@index');
Route::get('/table/{table}', 'TableController@show');
Route::post('/table', 'TableController@store');
Route::put('/table/{table}', 'TableController@update');
Route::delete('/table/{table}', 'TableController@destroy');

// TableReservation.
Route::get('/table_reservation', 'TableReservation@index');
Route::get('/table_reservation/{table_reservation}', 'TableReservation@show');
Route::post('/table_reservation', 'TableReservation@store');
Route::put('/table_reservation/{table_reservation}', 'TableReservation@update');
Route::delete('/table_reservation/{table_reservation}', 'TableReservation@destroy');
