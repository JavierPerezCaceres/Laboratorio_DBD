<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\PaymentMethod;
use App\CardPayment;
use Faker\Generator as Faker;

$factory->define(PaymentMethod::class, function (Faker $faker) {
	$card_payment_id = DB::table('card_payments')->select('id')->get();

    return [
        'payment_type' => $faker->numberBetween($min = 1, $max = 3),

        'card_payment_id' => $card_payment_id->random()->id,
    ];
});
