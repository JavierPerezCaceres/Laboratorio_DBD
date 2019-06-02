<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PurchaseOrder;
use App\PaymentMethod;
use App\Client;
use App\Delivery;
use Faker\Generator as Faker;

$factory->define(PurchaseOrder::class, function (Faker $faker) {
    $payment_method_id = DB::table('payment_methods')->select('id')->get();
    $client_id = DB::table('clients')->select('id')->get();
    $delivery_id = DB::table('deliveries')->select('id')->get();

    return [
        'amount' => $faker->numberBetween($min = 2000, $max = 9000),
    	'delivery_method' => $faker->numberBetween($min = 1, $max = 3),
    	'purchase_type' => $faker->numberBetween($min = 1, $max = 3),
    	'confirmation' => $faker->numberBetween($min = 0, $max = 1),
    	'observations' => $faker->realText($maxNbChars = 120, $indexSize = 2),

    	'payment_method_id' => $payment_method_id->random()->id,
        'client_id' => $client_id->random()->id,
        'delivery_id' => $delivery_id->random()->id,
    ];
});
