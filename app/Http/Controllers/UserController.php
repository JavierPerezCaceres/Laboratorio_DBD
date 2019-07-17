<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Client;
use App\City;
use App\District;
use App\Address;
use App\PurchaseOrder;
use App\WebpageRecord;
use App\Http\Controllers\WebpageRecordController;
use App\RestaurantRequest;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Start new Controllers
    // Para el Cliente me faltan hacer las validaciones de los metodos y que se puedan eliminar direcciones.
    public function selectControlPanel(){
        if( Auth::user()->role_id == 1){ // admin

            $records = WebpageRecord::all();
            $requests = RestaurantRequest::all();
            $user = User::find( Auth::user()->id );
            $client = Client::find( $user->client_id);
            $users = User::all();
            return view('adminPanelControl', compact('records','requests','user','users','client'));

        }elseif(false){ // restaurant

            return view('main');

        }else{ // client

            $address = Address::all();
            $purchaseOrder = PurchaseOrder::all();
            $cities = City::all();
            $districts = District::all();
            $user = User::find( Auth::user()->id );
            $client = Client::find( $user->client_id );
            $addresses = $address->where('client_id',$client->id);
            $purchaseOrders = $purchaseOrder->where('client_id',$client->id);

            return view('userPanelControl', compact('client','addresses','purchaseOrders','user','cities','districts'));
        }
    }

    public function addDirection(Request $request){
        
        // Se instancia un objeto del modelo
        $address = new Address();
        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );
        // Variable que contiene al cliente actual.
        $client = Client::find( $user->client_id );
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Agregó Nueva Dirección");
        // En caso de pasar las validaciones se crea la nueva fila en la tabla.
        Address::create([
            'street' => $request->street,
            'number' => $request->number,
            'district_id' => $request->district_id,
            'client_id' => $client->id
        ]);

        return UserController::selectControlPanel();
    }

    public function changeName(Request $request){

        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );
        // Variable que contiene al cliente actual.
        $client = Client::find( $user->client_id );

        // Edicion del Nombre para la tabla usuario.
        $user->updateOrCreate([
            'id' => $user->id
        ],
        [
            'name' => $request->name,
        ]);
        // Edicion del Nombre para la tabla cliente.
        $client->updateOrCreate([
            'id' => $client->id
        ],
        [
            'name' => $request->name,
        ]);
        return UserController::selectControlPanel();
    }

    public function changeLastName(Request $request){
        
        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );
        // Variable que contiene al cliente actual.
        $client = Client::find( $user->client_id );

        // Edicion del Apellido para la tabla cliente.
        $client->updateOrCreate([
            'id' => $client->id
        ],
        [
            'lastname' => $request->name,
        ]);

        return UserController::selectControlPanel();
    }

    public function changeEmail(Request $request){

        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );

        // Edicion del Nombre para la tabla cliente.
        $user->updateOrCreate([
            'id' => $user->id
        ],
        [
            'email' => $request->email
        ]);
        
        return UserController::selectControlPanel();
    }

    public function changePhone(Request $request){

        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );
        // Variable que contiene al cliente actual.
        $client = Client::find( $user->client_id );

        // Edicion del Nombre para la tabla cliente.
        $client->updateOrCreate([
            'id' => $client->id
        ],
        [
            'phone' => $request->phone
        ]);
        
        return UserController::selectControlPanel();
    }

    public function deleteDirection(Request $request){
        return $request;
    }

    // End new Controllers
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return $user;
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
        $verifyUser = User::find($request->id);

        if($verifyUser == null){

            // Se instancia un objeto del modelo
            $user = new User();

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $role_id = $request->role_id;
            $client_id = $request->client_id;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($email)) and !(is_numeric($password)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role_id' => $role_id,
                    'client_id' => $client_id,

                ]);

            }else{
                return "Error en los parámetros ingresados";
            }

        }else{
            return "Error al ingresar Usuario, llave primaria ya existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return User::all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if($user == null){
            return "No se ha encontrado el Usuario buscado";
        }
        else{
            return $user;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // Se busca la id ingresada, en caso de no existir arroja null.
        $verifyUser = User::find($user->id);

        if($verifyUser != null){

            // Se guardan valores en las distintas variables de modelo.
            $name = $request->name;
            $email = $request->email;
            $password = $request->password;
            $role_id = $request->role_id;
            $client_id = $request->client_id;

            // Se realizan las validaciones de los datos.
            if( !(is_numeric($email)) and !(is_numeric($password)) ){
                
                // En caso de pasar las validaciones se crea la nueva fila en la tabla.
                $user->updateOrCreate([
                    'id' => $user->id
                ],
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role_id' => $role_id,
                    'client_id' => $client_id,

                ]);
            }else{
                return "Error en los parámetros ingresados.";
            }

        }else{
            return "Error al actualizar Usuario, llave primaria no existente";
        }

        // Se muestran todos el contenido de la tabla User.
        return User::all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // Si la id no existe en la tabla, se avisa al usuario.
        if($user == null){
            return "No se ha encontrado el Usuario a eliminar";
        }
        // Si la id existe en la tabla, se elimina.
        else{
            $user->delete();
            return "Se ha eliminado el Usuario";
        }
    }
}
