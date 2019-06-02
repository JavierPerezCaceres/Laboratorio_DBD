<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Delivery;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Delivery::class, function (Faker $faker) {
    return [
        'receptor_name' => $faker->name,
        'contact_number' => $faker->e164PhoneNumber,
        'extra_wait_time' => $faker->time,
        'delivery_address'=> $faker->addres,
        'restaurant_id' => App\Restaurant::all()->random()->id,
    ];
});
