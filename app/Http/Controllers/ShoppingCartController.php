<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Restaurant;

class ShoppingCartController extends Controller
{


    public static function update($menuID){

        $menu=Menu::where('id',$menuID)->get();
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
        Cart::restore(request()->session()->get('id'));
        Cart::add(['id' => $menu[0]->id, 'name' => $menu[0]->name, 'qty' => 1, 'price' => $menu[0]->total_price]);
        return redirect()->back();
    }

    public static function remove($menuID){
        Cart::restore(request()->session()->get('id'));
        foreach (Cart::content()->all() as $item){
          if ($item->id == $menuID) {
            Cart::remove($item->rowId);
          }
        }
        return redirect()->back();
    }

}
