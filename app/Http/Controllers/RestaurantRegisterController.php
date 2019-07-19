<?php

namespace App\Http\Controllers;

use App\User;
use App\Restaurant;
use App\RestaurantRequest;
use App\CategoryRestaurant;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class RestaurantRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre_solicitante' => ['required', 'string', 'max:255'],
            'apellido_solicitante' => ['required', 'string', 'max:255'],
            'rut_empresa' => ['required', 'string', 'max:255'],
            'codigo_SIS' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nombre_restaurant' => ['required', 'string', 'max:255'],
            'dir_casa_matriz' =>['required','string','max:255'],
            'category' =>['required','string','max:255'],
            
            'kitchen' =>['required','string','max:255'],
            'phoneNumber' =>['required','numeric','digits:11'],
            'opening_hour' =>['required','string','max:255'],
            'closing' =>['required','string','max:255'],
            'personCost'=>['required','numeric'],
            'waitTime' =>['requiered','string','max:255'],
            'direction' =>['requiered','string','max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $this->validator($request->all())->validate();
        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'client_id' => $client->id
        ]);
        $restaurant= Restaurant::create([
          'category'=> $request->category,
          'contact_number' => $request->phoneNumber,
          'kitchen_type' => $request->kitchen,
          'opening_hour' => $request->opening,
          'closing_hour' => $request->closing,
          'person_cost' => $request->personCost,
          'wait_time' => $request->waitTime,
          'direction' => $request->direction,
          'user_id'=>$user->id
        ]);
        // $restaurantRequest = RestaurantRequest::create([
            
        // ]);
        return view('principal');
    }

    public function index(){
        $restaurant_categories = CategoryRestaurant::select('id', 'name')->orderBy('id')->get();
        
        return view('auth.restaurantRegister', compact('restaurant_categories') );
    }
}
