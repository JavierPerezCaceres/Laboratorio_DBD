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

Route::get('/orderConfirmation', function(){
	return view('orderConfirmation');
});

Route::get('/controlPanel','UserController@selectControlPanel');
Route::post('/controlPanelA','UserController@addDirection')->name('addDirection');
Route::post('/controlPanelCN','UserController@changeName')->name('changeName');
Route::post('/controlPanelCLN','UserController@changeLastName')->name('changeLastName');
Route::post('/controlPanelCE','UserController@changeEmail')->name('changeEmail');
Route::post('/controlPanelCP','UserController@changePhone')->name('changePhone');
Route::delete('/controlPanelDD/{address}','UserController@deleteDirection')->name('deleteDirection');
Route::post('/controlPanelUP','UserController@updatePassword')->name('updatePassword');
Route::post('/controlPanelRestaurantAddProduct/{menu}','UserController@showProductView')->name('showProductView');
Route::post('/controlPanelAddProduct/{menu}','UserController@addProduct')->name('addProductMenu');

Route::post('/search', 'RestaurantController@search')->name('search');

Route::get('/main', function () {
  return view('main');
});

Route::get('/restaurantViews/{restaurant}','RestaurantController@showRestaurant');

Route::get('/', 'LandingpageController@index');
Route::get('/districts/{city}', 'LandingpageController@getDistricts');

Route::get('/login', function () {
    return view('login');
});
Route::post('/login','LoginController@login')->name('login');

Route::get('/restaurantRegister',function(){
    return view('restaurantRegister');
});
Route::post('restaurantRegister','RestaurantRegisterController@create')->name('restaurantRegister');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('newRegister','Auth\RegisterController@create')->name('newRegister');
Route::get('/restaurantRequest/{user}','RestaurantRequestController@page');
Route::post('/restaurantRequest','RestaurantRequestController@create')->name('restaurantRequest');

Route::get('/purchaseOrder/{precio}/{UI}/{restaurantID}', 'PurchaseOrderController@create');
Route::post('/redirect/{UI}/{precio}/{restaurantID}','PurchaseOrderController@redirect')->name('redirect');
Route::post('/cardPayment/{UI}/{precio}/{clientNumber}/{clientName}/{clientLastname}/{delivery}/{address}/{restaurantID}','PurchaseOrderController@cardPay')->name('cardPayment');
Route::get('/add/{menuID}','ShoppingCartController@update');
Route::get('/remove/{menuID}','ShoppingCartController@remove');
// cambios desde aquí hacia arriba (relacionados a vistas)

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

Route::get('/purchase_order/{client}/viewClientOrders','PurchaseOrderController@viewClientOrders');


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


Route::get('/menu/{menu}/viewProductMenu', 'MenuProductController@viewProductMenu');
Route::put('/menu/{product}/updateProductMenu', 'MenuProductController@updateProductMenu');
Route::delete('/menu/{menu}/deleteProductMenu/{product}', 'MenuProductController@deleteProductMenu');

//Reserva Menu
Route::get('/menu_reservation', 'MenuReservationController@index');
Route::get('/menu_reservation/{menu_reservation}', 'MenuReservationController@show');
Route::post('/menu_reservation', 'MenuReservationController@store');
Route::put('/menu_reservation/{menu_reservation}', 'MenuReservationController@update');
Route::delete('/menu_reservation/{menu_reservation}', 'MenuReservationController@destroy');

//Menu Producto
Route::get('/menu_product', 'MenuProductController@index');
Route::get('/menu_product/{menu_product}', 'MenuProductController@show');
Route::post('/menu_product', 'MenuProductController@store');
Route::put('/menu_product/{menu_product}', 'MenuProductController@update');
Route::delete('/menu_product/{menu_product}', 'MenuProductController@destroy');

//Producto
Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
Route::post('/product', 'ProductController@store');
Route::put('/product/{product}', 'ProductController@update');
Route::delete('/product/{product}', 'ProductController@destroy');

//Producto Ingrediente
Route::get('/product_ingredient', 'ProductIngredientController@index');
Route::get('/product_ingredient/{product_ingredient}', 'ProductIngredientController@show');
Route::post('/product_ingredient', 'ProductIngredientController@store');
Route::put('/product_ingredient/{product_ingredient}', 'ProductIngredientController@update');
Route::delete('/product_ingredient/{product_ingredient}', 'ProductIngredientController@destroy');

//Ingrediente
Route::get('/ingredient', 'IngredientController@index');
Route::get('/ingredient/{ingredient}', 'IngredientController@show');
Route::post('/ingredient', 'IngredientController@store');
Route::put('/ingredient/{ingredient}', 'IngredientController@update');
Route::delete('/ingredient/{ingredient}', 'IngredientController@destroy');

// ProductoCategoria.
Route::get('/product_category', 'ProductCategoryController@index');
Route::get('/product_category/{product_category}', 'ProductCategoryController@show');
Route::post('/product_category', 'ProductCategoryController@store');
Route::put('/product_category/{product_category}', 'ProductCategoryController@update');
Route::delete('/product_category/{product_category}', 'ProductCategoryController@destroy');

Route::get('/product_category/{product_category}/viewProductCategory','ProductCategoryController@viewProductCategory');
Route::put('/product_category/{product_category}/updateProductCategory','ProductCategoryController@updateProductCategory');
Route::delete('/product_category/{product_category}/deleteProductCategory','ProductCategoryController@deleteProductCategory');

// Restaurant.
Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/{restaurant}', 'RestaurantController@show');
Route::post('/restaurant', 'RestaurantController@store');
Route::put('/restaurant/{restaurant}', 'RestaurantController@update');
Route::delete('/restaurant/{restaurant}', 'RestaurantController@destroy');

Route::get('/restaurant/{restaurant}/viewLocation','RestaurantController@viewLocation');
Route::put('/restaurant/{restaurant}/updateLocation','RestaurantController@updateLocation');
Route::delete('/restaurant/{restaurant}/deleteLocation','RestaurantController@deleteLocation');

// Table.
Route::get('/table', 'TableController@index');
Route::get('/table/{table}', 'TableController@show');
Route::post('/table', 'TableController@store');
Route::put('/table/{table}', 'TableController@update');
Route::delete('/table/{table}', 'TableController@destroy');

Route::get('/table/{restaurant}/viewTable','TableController@viewTable');
Route::put('/table/{table}/updateTable','TableController@updateTable');
Route::delete('/table/{table}/deleteTable','TableController@deleteTable');

// TableReservation.
Route::get('/table_reservation', 'TableReservationController@index');
Route::get('/table_reservation/{table_reservation}', 'TableReservationController@show');
Route::post('/table_reservation', 'TableReservationController@store');
Route::put('/table_reservation/{table_reservation}', 'TableReservationController@update');
Route::delete('/table_reservation/{table_reservation}', 'TableReservationController@destroy');

Route::get('/table_reservation/{table_reservation}/viewTableReservation', 'TableReservationController@viewTableReservation');
Route::put('/table_reservation/{table_reservation}/updateTableReservation', 'TableReservationController@updateTableReservation');
Route::delete('/table_reservation/{table_reservation}/deleteTableReservation', 'TableReservationController@deleteTableReservation');

// Delivery.
Route::get('/delivery', 'DeliveryController@index');
Route::get('/delivery/{delivery}', 'DeliveryController@show');
Route::post('/delivery', 'DeliveryController@store');
Route::put('/delivery/{delivery}', 'DeliveryController@update');
Route::delete('/delivery/{delivery}', 'DeliveryController@destroy');

//RestaurantRequest
Route::get('/restaurant_request', 'RestaurantRequestController@index');
Route::get('/restaurant_request/{restaurant_request}', 'RestaurantRequestController@show');
Route::post('/restaurant_request', 'RestaurantRequestController@store');
Route::put('/restaurant_request/{restaurant_request}', 'RestaurantRequestController@update');
Route::delete('/restaurant_request/{restaurant_request}', 'RestaurantRequestController@destroy');

//Valoration
Route::get('/valoration', 'ValorationController@index');
Route::get('/valoration/{valoration}', 'ValorationController@show');
Route::post('/valoration', 'ValorationController@store');
Route::put('/valoration/{valoration}', 'ValorationController@update');
Route::delete('/valoration/{valoration}', 'ValorationController@destroy');

Route::get('/valoration/{valoration}/viewComment', 'ValorationController@viewComment');
Route::put('/valoration/{valoration}/updateComment', 'ValorationController@updateComment');
Route::delete('/valoration/{valoration}/deleteComment', 'ValorationController@deleteComment');

//WebpageRecord
Route::get('/webpage_record', 'WebpageRecordController@index');
Route::get('/webpage_record/{webpage_record}', 'WebpageRecordController@show');
Route::post('/webpage_record', 'WebpageRecordController@store');
Route::put('/webpage_record/{webpage_record}', 'WebpageRecordController@update');
Route::delete('/webpage_record/{webpage_record}', 'WebpageRecordController@destroy');

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
