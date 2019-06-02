<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Restaurant;
use App\Table;
use Faker\Generator as Faker;

$factory->define(Table::class, function (Faker $faker) {
	$restaurant_id = DB::table('restaurants')->select('id')->get();

    return [
        'capacity' => $faker->numberBetween($min = 2, $max = 9),
        'number' => $faker->numberBetween($min = 1, $max = 99),
        'avaible'=> $faker->numberBetween($min = 0, $max = 1),
        'restaurant_id' => $restaurant_id->random()->id,
    ];
});
