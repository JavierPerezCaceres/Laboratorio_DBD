<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\City;
use App\District;
use App\Valoration;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{

    public function index()
    {
        $cities = City::all();
        $comunas = District::all();
        return view('principal',['cities'=> $cities,'districts'=> $comunas]);
    }
    
    public function filtrarMejoresRestaurant(){
    	$restaurants = Restaurant::all();
    	$valoraciones = Valoration::all();
    	$calificacion = [];
    	$valorFinal = 0;
    	for ($i=0 ; $i < $restaurants->count() ; $i++ ) { 
    		$valoracionRestaurant = $valoraciones->where('restaurant_id',i+1);
    		foreach ($valoracionRestaurant as $valoracion => $score) {
    			$valorFinal = $valorFinal + $score;
    		}
    		$calificacion[i]= $valorFinal;
    		$valorFinal=0;
    	}
        return $calificacion;
    }
}
