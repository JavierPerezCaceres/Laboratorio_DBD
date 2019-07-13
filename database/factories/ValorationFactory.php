<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Valoration;
use App\PurchaseOrder;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Valoration::class, function (Faker $faker) {
	$purchase_order_id = DB::table('purchase_orders')->select('id')->get();
	$restaurant_id = DB::table('restaurants')->select('id')->get();

    return [
        'score'=>$faker->numberBetween($min=2,$max=5),
        'comment'=>$faker->text(200),
        
        'purchase_order_id'=> $purchase_order_id->random()->id,
        'restaurant_id'=>$restaurant_id->random()->id,
    ];
});
