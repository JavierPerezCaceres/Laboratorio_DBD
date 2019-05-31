<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CardPayment;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'autorization_code' => $faker->numberBetween($min = 1, $max = 3),
        'transaction_code' => $faker->iban($countryCode),
        'card_number'=> $faker->creditCardNumber,
        'account_type'=> $faker->numberBetween($min = 1, $max = 2),
        'expiration_date'=> $faker->creditCardExpirationDate,
    ];
});
