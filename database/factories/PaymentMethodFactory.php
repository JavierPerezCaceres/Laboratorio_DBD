<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PaymentMethod;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'payment_type' => $faker->numberBetween($min = 1, $max = 3),
    ];
});
