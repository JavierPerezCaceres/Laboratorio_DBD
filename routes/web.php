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

// Cliente
Route::get('/client','ClientController@index');
Route::get('/client/{client}','ClientController@show');
Route::post('/client', 'ClientController@store');
Route::put('/client/{client}', 'ClientController@update');
Route::delete('/client/{client}', 'ClientController@destroy');

// Pago con Tarjeta
Route::get('/card_payment','CardPaymentController@index');
Route::get('/card_payment/{card_payment}','CardPaymentController@show');
Route::post('/card_payment', 'CardPaymentController@store');
Route::put('/card_payment/{card_payment}', 'CardPaymentController@update');
Route::delete('/card_payment/{card_payment}', 'CardPaymentController@destroy');

// Medio de Pago
Route::get('/payment_method','PaymentMethodController@index');
Route::get('/payment_method/{payment_method}','PaymentMethodController@show');
Route::post('/payment_method', 'PaymentMethodController@store');
Route::put('/payment_method/{payment_method}', 'PaymentMethodController@update');
Route::delete('/payment_method/{payment_method}', 'PaymentMethodController@destroy');

// Orden de Compra
Route::get('/purchase_order','PurchaseOrderController@index');
Route::get('/purchase_order/{purchase_order}','PurchaseOrderController@show');
Route::post('/purchase_order', 'PurchaseOrderController@store');
Route::put('/purchase_order/{purchase_order}', 'PurchaseOrderController@update');
Route::delete('/purchase_order/{purchase_order}', 'PurchaseOrderController@destroy');

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
Route::get('/menu', 'MenuController@index');
Route::get('/menu/{menu}', 'MenuController@show');
Route::post('/menu', 'MenuController@store');
Route::put('/menu/{menu}', 'MenuController@update');
Route::delete('/menu/{menu}', 'MenuController@destroy');
//Route::resource('menu','MenuController');

// ProductoCategoria.
Route::get('/product_category', 'ProductCategoryController@index');
Route::get('/product_category/{product_category}', 'ProductCategoryController@show');
Route::post('/product_category', 'ProductCategoryController@store');
Route::put('/product_category/{product_category}', 'ProductCategoryController@update');
Route::delete('/product_category/{product_category}', 'ProductCategoryController@destroy');

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
Route::get('/table_reservation', 'TableReservationController@index');
Route::get('/table_reservation/{table_reservation}', 'TableReservationController@show');
Route::post('/table_reservation', 'TableReservationController@store');
Route::put('/table_reservation/{table_reservation}', 'TableReservationController@update');
Route::delete('/table_reservation/{table_reservation}', 'TableReservationController@destroy');

// Delivery.
Route::get('/delivery', 'DeliveryController@index');
Route::get('/delivery/{delivery}', 'DeliveryController@show');
Route::post('/delivery', 'DeliveryController@store');
Route::put('/delivery/{delivery}', 'DeliveryController@update');
Route::delete('/delivery/{delivery}', 'DeliveryController@destroy');

//RestaurantRequest
Route::get('/restaurantRequest', 'RestaurantRequestController@index');
Route::get('/restaurantRequest/{restaurantRequest}', 'RestaurantRequestController@show');
Route::post('/restaurantRequest', 'RestaurantRequestController@store');
Route::put('/restaurantRequest/{restaurantRequest}', 'RestaurantRequestController@update');
Route::delete('/restaurantRequest/{restaurantRequest}', 'RestaurantRequestController@destroy');

//Valoration
Route::get('/valoration', 'ValorationController@index');
Route::get('/valoration/{valoration}', 'ValorationController@show');
Route::post('/valoration', 'ValorationController@store');
Route::put('/valoration/{valoration}', 'ValorationController@update');
Route::delete('/valoration/{valoration}', 'ValorationController@destroy');

//WebpageRecord
Route::get('/webpageRecord', 'WebpageRecordController@index');
Route::get('/webpageRecord/{webpageRecord}', 'WebpageRecordController@show');
Route::post('/webpageRecord', 'WebpageRecordController@store');
Route::put('/webpageRecord/{webpageRecord}', 'WebpageRecordController@update');
Route::delete('/webpageRecord/{webpageRecord}', 'WebpageRecordController@destroy');

// User
Route::get('/user', 'UserController@index');
Route::get('/user/{user}', 'UserController@show');
Route::post('/user', 'UserController@store');
Route::put('/user/{user}', 'UserController@update');
Route::delete('/user/{user}', 'UserController@destroy');

// Role
Route::get('/role', 'RoleController@index');
Route::get('/role/{role}', 'RoleController@show');
Route::post('/role', 'RoleController@store');
Route::put('/role/{role}', 'RoleController@update');
Route::delete('/role/{role}', 'RoleController@destroy');

// Address
Route::get('/address', 'AddressController@index');
Route::get('/address/{address}', 'AddressController@show');
Route::post('/address', 'AddressController@store');
Route::put('/address/{address}', 'AddressController@update');
Route::delete('/address/{address}', 'AddressController@destroy');

// District
Route::get('/district', 'DistrictController@index');
Route::get('/district/{district}', 'DistrictController@show');
Route::post('/district', 'DistrictController@store');
Route::put('/district/{district}', 'DistrictController@update');
Route::delete('/district/{district}', 'DistrictController@destroy');

// City
Route::get('/city', 'CityController@index');
Route::get('/city/{city}', 'CityController@show');
Route::post('/city', 'CityController@store');
Route::put('/city/{city}', 'CityController@update');
Route::delete('/city/{city}', 'CityController@destroy');
