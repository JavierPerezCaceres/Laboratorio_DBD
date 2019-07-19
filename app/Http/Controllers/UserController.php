<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Client;
use App\City;
use App\District;
use App\Address;
use App\DistrictRestaurant;
use App\PurchaseOrder;
use App\Product;
use App\WebpageRecord;
use App\Restaurant;
use App\MenuProduct;
use App\Menu;
use App\Http\Controllers\WebpageRecordController;
use App\RestaurantRequest;
use Auth;
use Hash;
use Validator;
use Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Start new Controllers
    
    public function selectControlPanel(){
        if( Auth::user()->role_id == 1){ // admin

            $records = WebpageRecord::all();
            $requests = RestaurantRequest::all();
            $user = User::find( Auth::user()->id );
            $client = Client::find( $user->client_id);
            $users = User::all();
            return view('adminPanelControl', compact('records','requests','user','users','client'));

        }elseif( Auth::user()->role_id == 2){ // restaurant

            $user = User::find( Auth::user()->id );
            $rstnts = Restaurant::all();
            $men = Menu::all();
            $menProd = MenuProduct::all();
            $products = Product::all();
            $rstntsDstrcts = DistrictRestaurant::all();
            $restaurants = $rstnts->where('user_id',$user->id)->first();
            $menus = $men->where('restaurant_id',$restaurants->id);
            $district = $rstntsDstrcts->where('restaurant_id',$restaurants->id);

            return view('restaurantPanelControl',compact('restaurants','district','menus','products'));

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

        return redirect('/controlPanel');
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

        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Se Cambio el Nombre");

        return redirect('/controlPanel');
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

        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Se Cambio el Apellido");

        return redirect('/controlPanel');
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
        
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio Su Correo");

        return redirect('/controlPanel');
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
        
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");

        return redirect('/controlPanel');
    }

    public function deleteDirection(Request $request,Address $address){
        $address->delete();
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Eliminó una dirección");
        return redirect('/controlPanel');
    }

    public function updatePassword(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('/controlPanel');
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('/controlPanel');
            }
            else
            {
                return redirect('/controlPanel');
            }
        }
    }

    public function showProductView(Request $request,Menu $menu){
        $all_product = MenuProduct::All();
        $products_id = $all_product->where('menu_id',$menu->id);
        $all_products = Product::All();
        return view('addProductMenu',compact('menu','products_id','all_products'));
    }

    public function addProduct(Request $request,Menu $menu){
        $menuProduct = new MenuProduct();
        
        MenuProduct::create([
            'price' => 0,
            'menu_id' => $menu->id,
            'product_id' => $request->product_id
        ]);

        $menu2 = Menu::find($menu->id);
        $menu2->updateOrCreate([
            'id' => $menu2->id
        ],
        [
            'total_price' => $menu2->total_price + rand(2000,3000),
        ]);

        return redirect('/controlPanel');
    }

    public function changeNameDirection(Request $request){
        // Variable que contiene al usuario actual.
        $user = User::find( Auth::user()->id );
        // Edicion del Nombre para la tabla usuario.
        $user->updateOrCreate([
            'id' => $user->id
        ],
        [
            'name' => $request->name,
        ]);

        $requestRestaurant = RestaurantRequest::All()->where('user_id',Auth::user()->id)->first();
        // Edicion del Nombre para la tabla RestaurantRequest.
        $requestRestaurant->updateOrCreate([
            'id' => $requestRestaurant->id
        ],
        [
            'name' => $request->name,
        ]);

        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
        // Edicion del Nombre para la tabla RestaurantRequest.
        $restaurant->updateOrCreate([
            'id' => $restaurant->id
        ],
        [
            'name' => $request->name,
        ]);

        return redirect('/controlPanel');
    }

    public function changePhoneRestaurant(Request $request){
        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
         // Edicion del Nombre para la tabla cliente.
         $restaurant->updateOrCreate([
             'id' => $restaurant->id
         ],
         [
             'contact_number' => $request->phone
         ]);
         
         // Se añade acción al log de la página.
         $webpageAux = new WebPageRecordController();
         $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");
 
         return redirect('/controlPanel');
    }

    public function changeOpeningHour(Request $request){
        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
         // Edicion del Nombre para la tabla cliente.
        $restaurant->updateOrCreate([
             'id' => $restaurant->id
        ],
        [
             'opening_hour' => $request->openingHour
        ]);
         
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");
 
        return redirect('/controlPanel');
    }

    public function changeClosingHour(Request $request){
        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
         // Edicion del Nombre para la tabla cliente.
        $restaurant->updateOrCreate([
             'id' => $restaurant->id
        ],
        [
             'closing_hour' => $request->closingHour
        ]);
         
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");
 
        return redirect('/controlPanel');
    }

    public function changePersonCost(Request $request){
        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
         // Edicion del Nombre para la tabla cliente.
        $restaurant->updateOrCreate([
             'id' => $restaurant->id
        ],
        [
             'person_cost' => $request->personCost
        ]);
         
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");
 
        return redirect('/controlPanel');
    }

    public function changeEstimatedTime(Request $request){
        $restaurant = Restaurant::All()->where('user_id',Auth::user()->id)->first();
         // Edicion del Nombre para la tabla cliente.
        $restaurant->updateOrCreate([
             'id' => $restaurant->id
        ],
        [
             'wait_time' => $request->estimatedTime
        ]);
         
        // Se añade acción al log de la página.
        $webpageAux = new WebPageRecordController();
        $webpage = $webpageAux->addNewRecord("Cambio su Número telefónico");
 
        return redirect('/controlPanel');
    }

    public function addMenu(Request $request){
        
        // Variable que contiene al usuario actual.
        $menu = new Menu();
        $menuProduct = new MenuProduct();
        $restaurants = Restaurant::All();
        $restaurant = $restaurants->where('user_id',Auth::user()->id)->first();
        // Se obtiene el usuario actual
        
        Menu::create([
            'created_at' => now(),
            'name' => $request->menuName,
            'total_price' => $request->menuPrice,
            'discount' => 0,
            'restaurant_id' => $restaurant->id
        ]);
        $menu = Menu::All()->where('name',$request->menuName)->where('total_price',$request->menuPrice)->last();
        
        MenuProduct::create([
            'price' => 0,
            'created_at' => now(),
            'menu_id' => $menu->id,
            'product_id' => $request->product1
        ]);

        MenuProduct::create([
            'price' => 0,
            'created_at' => now(),
            'menu_id' => $menu->id,
            'product_id' => $request->product2
        ]);

        MenuProduct::create([
            'price' => 0,
            'created_at' => now(),
            'menu_id' => $menu->id,
            'product_id' => $request->product3
        ]);
        
        
        return redirect('/controlPanel');
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
