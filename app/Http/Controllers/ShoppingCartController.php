<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Restaurant;

class ShoppingCartController extends Controller
{


    public function show($UI){
      Cart::restore($UI);
      $carrito=Cart::content();
      $restaurantID=0;
      if (Cart::count() != 0){
        foreach (Cart::content()->all() as $a){
          $menuCarro=Menu::where('id',$a->id)->get();
          break;
        }
        $restaurantID=$menuCarro[0]->restaurant_id;
      }
      return view('shoppingCart',compact('carrito','UI','restaurantID'));
    }
    public static function update($UI,$menuID,$restaurantID){

        $menu=Menu::where('id',$menuID)->get();
        $intRestaurantID=intval($restaurantID);
        $contador=0;
        if (Cart::count() != 0){
          foreach (Cart::content()->all() as $a){
            $menuCarro=Menu::where('id',$a->id)->get();
            break;
          }
          if($menu[0]->restaurant_id != $menuCarro[0]->restaurant_id){
            Cart::destroy();
          }
        }
        Cart::restore($UI);
        Cart::add(['id' => $menu[0]->id, 'name' => $menu[0]->name, 'qty' => 1, 'price' => $menu[0]->total_price]);
        return redirect()->back();
    }

}
