<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PaymentMethod;
use App\CardPayment;
use Faker\Generator as Faker;

$factory->define(PaymentMethod::class, function (Faker $faker) {
    return [
        'payment_type' => $faker->numberBetween($min = 1, $max = 3),

        'card_payment_id' => $faker->card_payment_id::all()->random()->id,
    ];
});
