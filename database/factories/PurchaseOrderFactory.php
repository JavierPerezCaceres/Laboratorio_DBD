<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PurchaseOrder;
use App\PaymentMethod;
use App\Client;
use App\Delivery;
use Faker\Generator as Faker;

$factory->define(PurchaseOrder::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween($min = 2000, $max = 9000),
    	'delivery_method' => $faker->numberBetween($min = 1, $max = 3),
    	'purchase_type' => $faker->numberBetween($min = 1, $max = 3),
    	'confirmation' => $faker->numberBetween($min = 0, $max = 1),
    	'observations' => $faker->realText($maxNbChars = 120, $indexSize = 2),

    	'payment_method_id' => $faker->payment_method_id::all()->random()->id,
        'client_id' => $faker->client_id::all()->random()->id,
        'delivery_id' => $faker->delivery_id::all()->random()->id,
    ];
});
