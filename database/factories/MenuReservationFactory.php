<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MenuReservation;
use App\Menu;
use App\PurchaseOrder;
use Faker\Generator as Faker;

$factory->define(MenuReservation::class, function (Faker $faker) {
	$menu_id = DB::table('menus')->select('id')->get();
	$purchase_order_id = DB::table('purchase_orders')->select('id')->get();
    return [
    	'price' => $faker->numberBetween($min = 2000, $max = 9000),
        'quantity' => $faker->numberBetween($min = 100, $max = 2000),
        'menu_id' 		=> $menu_id->random()->id,
        'purchase_order_id' 	=> $purchase_order_id->random()->id,
    ];
});
