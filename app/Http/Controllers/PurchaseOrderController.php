<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use App\PaymentMethod;
use App\Client;
use App\Delivery;
use Illuminate\Http\Request;
use App\Restaurant;
use Illuminate\Support\Facades\Crypt;
use App\cardPayment;
use Faker\Factory as Faker;
use App\User;
use App\District;
use App\City;
use App\Menu;
use Gloudemans\Shoppingcart\Facades\Cart;


class PurchaseOrderController extends Controller
{
    public function confirmation(){

        $cities = City::all();
        $districts = District::all();
        Cart::restore(request()->session()->get('id'));
        $carrito = Cart::content();
        // $restaurantID=0;
        if (Cart::count() != 0){
          foreach (Cart::content()->all() as $a){
            $menuCarro=Menu::where('id',$a->id)->get();
            break;
          }
        }

        return view('purchase', compact(
            'cities',
            'districts',
            'carrito'
        ));
    }


    // nuevos controladores

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_order = PurchaseOrder::all();

        return $purchase_order;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Cart::restore(request()->session()->get('id'));
        $carrito = Cart::content();
        // $restaurantID=0;
        if (Cart::count() != 0){
          foreach (Cart::content()->all() as $a){
            $menuCarro=Menu::where('id',$a->id)->get();
            break;
          }
        }
        return view('ordenConfirmation');
    }

    public function redirect(Request $request,$UI,$precio,$restaurantID){
      $data=$request->all();
      if($data['payment_method']=="Targeta Crédito/Débito"){
        return view('CardPayment',compact('data','UI','precio','data','restaurantID'));
      }
      else{
        return "caso: no existe tarjeta de la cual sacar el id para la forma de pago";
      }
    }
    
    public function cardPay(Request $request,$UI,$precio,$clientName,$clientLastname,$delivery,$clientNumber,$address,$restaurantID){
      $faker = Faker::create();
      $card=CardPayment::create([
        'autorization_code'=> $request->autorizationCode,
        'transaction_code'=>$faker->unique()->randomNumber($nbDigits=7),
        'card_number'=>$request->cardNumber,
        'account_type'=>$request->AccountType,
        'expiration_date'=>$request->expiration_date
      ]);
      $paymentMethod=PaymentMethod::create([
        'payment_type'=>$request->AccountType,
        'card_payment_id'=>$card->id
      ]);
      $delivery=Delivery::create([
        'receptor_name'=> $clientName,
        'contact_number'=> $clientNumber,
        'extra_wait_time'=>$faker->numberBetween($min = 0, $max = 60),
        'delivery_address' =>$address,
        'restaurant_id' => $restaurantID
      ]);
      $userID=Crypt::decrypt($UI);
      if ($userID !=0){
        $clientes=User::where('id',$userID)->get();
        $purchaseOrder=PurchaseOrder::create([
          'amount'=>$precio,
          'delivery_method'=>$request->delivery,
          'confirmation'=>0,
          'payment_method_id'=>$paymentMethod->id,
          'client_id'=>$clientes[0]->client_id,
          'delivery_id'=> $delivery->id,
        ]);
      }
      else{
        $cliente=Client::create([
          'name' => $clientName,
          'lastname' => $clientLastname,
          'phone'=> $clientNumber,
        ]);
        $purchaseOrder=PurchaseOrder::create([
          'amount'=>$precio,
          'delivery_method'=>$request->delivery,
          'confirmation'=>0,
          'payment_method_id'=>$paymentMethod->id,
          'client_id'=>$cliente->id,
          'delivery_id'=> $delivery->id,
        ]);
      }
      return "se proceso la compra. La vista esta en desarrollo para ver que cosas despliega.";

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
        $verifyPurchaseOrder = PurchaseOrder::find($request->id);

        if($verifyPurchaseOrder == null){

            // Se instancia un objeto del modelo
            $purchase_order = new PurchaseOrder();

            // Se guardan valores en las distintas variables de modelo.
            $amount = $request->amount;
            $delivery_method = $request->delivery_method;
            $purchase_type = $request->purchase_type;
            $confirmation = $request->confirmation;
            $observations = $request->observations;

            $payment_method_id = $request->payment_method_id;
            $client_id = $request->client_id;
            $delivery_id = $request->delivery_id;


            // Se realizan las validaciones de los datos.
            if((is_numeric($amount)) and (is_numeric($delivery_method)) and (is_numeric($purchase_type)) and (is_numeric($confirmation) and !(is_numeric($observations))))
            {
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                    PurchaseOrder::create([

                    'amount' => $amount,
                    'delivery_method' => $delivery_method,
                    'purchase_type' => $purchase_type,
                    'confirmation' => $confirmation,
                    'observations' => $observations,

                    'payment_method_id' => $payment_method_id,
                    'client_id' => $client_id,
                    'delivery_id' => $delivery_id
                ]);

            }
            else{
                return "Error en los parametros ingresados.";
            }
        }

        else{
            return "Error al ingresar Orden de Compra, llave primaria repetida.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PurchaseOrder::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PurchaseOrder $purchaseOrder)
    {
        if($purchaseOrder == null){
            return "No se ha encontrado la Orden de Compra buscada.";
        }
        else{
            return $purchaseOrder;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PurchaseOrder $purchaseOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PurchaseOrder $purchaseOrder)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        /*$verifyPurchaseOrder = PurchaseOrder::find($request->id);

        if($verifyPurchaseOrder != null){

            // Se instancia un objeto del modelo
            $purchase_order = new PurchaseOrder();

            // Se guardan valores en las distintas variables de modelo.
            $amount = $request->amount;
            $delivery_method = $request->delivery_method;
            $purchase_type = $request->purchase_type;
            $confirmation = $request->confirmation;
            $observations = $request->observations;

            $payment_method_id = $request->payment_method_id;
            $client_id = $request->client_id;
            $delivery_id = $request->delivery_id;


            // Se realizan las validaciones de los datos.
            if( (is_numeric($amount)) and (is_numeric($delivery_method)) and (is_numeric($purchase_type)) and (is_numeric($confirmation) and !(is_numeric($observations))))
            {

                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $purchaseOrder->updateOrCreate([

                    'id' => $request->id
                ],
                [
                    'amount' => $amount,
                    'delivery_method' => $delivery_method,
                    'purchase_type' => $purchase_type,
                    'confirmation' => $confirmation,
                    'observations' => $observations,
                    'payment_method_id' => $payment_method_id,
                    'client_id' => $client_id,
                    'delivery_id' => $delivery_id
                ]);
            }
            else{
                return "Error en los parametros ingresados.";
            }
        }

        else{
            return "Error al ingresar Orden de Compra, llave primaria no existe.";
        }

        // Se muestran todos el contenido de la tabla Client.
        return PurchaseOrder::all();*/

        return "No es posible modificar una Orden de Compra";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PurchaseOrder  $purchaseOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PurchaseOrder $purchaseOrder)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        /*if($purchaseOrder == null){
            return "No se ha encontrado la Orden de Compra a eliminar.";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $purchaseOrder->delete();
            return "Se ha eliminado una Orden de Compra";

        }*/

        return "No es posible eliminar una Orden de Compra";

    }

    public function viewClientOrders(PurchaseOrder $purchaseOrder, Client $client)
    {
        $clientOrders = PurchaseOrder::where('client_id',$client->id)->get();

            return $client->purchaseOrder;
    }

    public function updateClientOrders(PurchaseOrder $purchaseOrder, Client $client)
    {
        return "No es posible modificar el historial de cliente";
    }

    public function deleteClientOrders(PurchaseOrder $purchaseOrder, Client $client)
    {
        return "No es posible eliminar el historial de cliente";
    }
}
