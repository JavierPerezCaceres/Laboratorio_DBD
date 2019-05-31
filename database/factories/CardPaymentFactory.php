<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CardPayment;
use Faker\Generator as Faker;

$factory->define(CardPayment::class, function (Faker $faker) {
    return [
        'autorization_code' => $faker->unique()->randomNumber($nbDigits=7) ,
        'transaction_code' => $faker->unique()->randomNumber($nbDigits=7),
        'card_number'=> $faker->unique()->creditCardNumber,
        'account_type'=> $faker->numberBetween($min = 1, $max = 2),
        'expiration_date'=> $faker->creditCardExpirationDate,
    ];
});
