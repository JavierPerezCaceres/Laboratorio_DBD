<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\City;
use App\District;
use App\Valoration;
use App\CategoryRestaurant;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{

    public function index()
    {
        $cities = City::all();
        $districts = District::all();
        $restaurants = LandingpageController::filtrarMejoresRestaurant();
        $restaurant_categories = CategoryRestaurant::select('name')->get();
        return view('principal',compact('cities','districts','restaurants','restaurant_categories'));
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
