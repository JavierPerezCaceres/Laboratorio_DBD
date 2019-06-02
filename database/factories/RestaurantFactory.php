<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Restaurant;
use App\User;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
            'category' => $faker->name,
            'contact_number' => $faker->e164PhoneNumber,
            'kitchen_type' => $faker->country,
            'opening_hour' => $faker->time($format = 'H:i:s', $max = 'now'),
            'closing_hour' => $faker->time($format = 'H:i:s', $max = 'now' + 2),
            'person_cost' => $faker->numberBetween($min = 2000, $max = 9000),
            'wait_time' => $faker->numberBetween($min = 30, $max = 45),
            'direction' => $faker->streetName,

            'user_id' => App\User::all()->random()->id
    ];
});
