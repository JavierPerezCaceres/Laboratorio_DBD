<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Delivery;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Delivery::class, function (Faker $faker) {
	$restaurant_id = DB::table('restaurants')->select('id')->get();
    return [
        'receptor_name' => $faker->name,
        'contact_number' => $faker->e164PhoneNumber,
        'extra_wait_time' => $faker->numberBetween($min = 0, $max = 60),
        'delivery_address'=> $faker->address,

        'restaurant_id' => $restaurant_id->random()->id,
    ];
});
