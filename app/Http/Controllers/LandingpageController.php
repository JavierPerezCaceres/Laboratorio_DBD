<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\City;
use App\District;
use App\Valoration;
use App\CategoryRestaurant;
use App\DistrictRestaurant;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{

    public function index()
    {
        // selecciona district_id de los restaurantes registrados
        $district_ids = DistrictRestaurant::select('district_id')->distinct()->orderBy('district_id', 'asc')->get();
        
        $districts = [];
        foreach ($district_ids as $id){
            $val = District::find($id->district_id);
            array_push($districts, $val);
        }
        $cities = [];
        foreach ($districts as $district){
            $val = City::find($district->city_id);
            array_push($cities, $val);
        }
        $cities = array_unique($cities);

        // Filtrar mejores restaurantes
        $best_restaurants = LandingpageController::filtrarMejoresRestaurant();
        $restaurant_categories = CategoryRestaurant::select('name')->get();
        return view('principal',compact('cities','districts','best_restaurants','restaurant_categories'));
    }

    public function getDistricts(City $city){
        $district_ids = DistrictRestaurant::select('district_id')->distinct()->orderBy('district_id', 'asc')->get();
        $districts = [];
        foreach ($district_ids as $id){
            $val = District::find($id->district_id);
            if($val->city_id == $city->id){
                array_push($districts, $val);
            }
        }
        return $districts;
    }

    
    private function filtrarMejoresRestaurant(){
        $restaurants = Restaurant::all();
        $valoraciones = Valoration::all();
        $calificacion = [];
        $indices = [];
        $valorFinal = 0;
        for ($i=0 ; $i < $restaurants->count() ; $i++ ) { 
            $valoracionRestaurant = $valoraciones->where('restaurant_id',$i+1);
            $aux=0;
            foreach ($valoracionRestaurant as $valoracion) {
                $valorFinal = $valorFinal + $valoracion->score;
                $aux= $aux+1;
            }
            $valorFinal= $valorFinal/$aux;
            $calificacion[$i]= $valorFinal;
            $aux=0;
            $valorFinal=0;
            $indices[$i]=$i+1;
        }
        for($l=1;$l<count($calificacion);$l++)
        {
            for($m=0;$m<count($calificacion)-$l;$m++)
            {
                if($calificacion[$m]<$calificacion[$m+1])
                {
                    $k=$calificacion[$m+1];
                    $h=$indices[$m+1];
                    $indices[$m+1]=$indices[$m];
                    $calificacion[$m+1]=$calificacion[$m];
                    $indices[$m]=$h;
                    $calificacion[$m]=$k;
                }
            }
        }
        $mejoresIndices=[];
        $final=[];
        for ($s=0; $s < 6; $s++) { 
            $mejoresIndices[$s]=$indices[$s];
            $final[$s] = $restaurants->find($indices[$s]); 
        }
        return $final;
    }

}
