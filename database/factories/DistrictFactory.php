<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'name' => $faker->state,
        'city_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
