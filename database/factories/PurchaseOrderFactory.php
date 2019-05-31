<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PurchaseOrder;
use Faker\Generator as Faker;

$factory->define(PurchaseOrder::class, function (Faker $faker) {
    return [
        'amount' => $faker->numberBetween($min = 2000, $max = 9000),
    	'delivery_method' => $faker->numberBetween($min = 1, $max = 3),
    	'purchase_type' => $faker->numberBetween($min = 1, $max = 3),
    	'confirmation' => $faker->numberBetween($min = 0, $max = 1),
    	'observations' => $faker->realText($maxNbChars = 120, $indexSize = 2),

    	'payment_method_id' => $faker->numberBetween($min = 1, $max = 9),
        'client_id' => $faker->numberBetween($min = 1, $max = 9),
        'delivery_id' => $faker->numberBetween($min = 1, $max = 9)
    ];
});
