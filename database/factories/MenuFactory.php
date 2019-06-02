<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
	$restaurant_id = DB::table('restaurants')->select('id')->get();

    return [
        'name' => $faker->name,
        'total_price' => $faker->numberBetween($min = 2000, $max = 9000),
        'discount' => $faker->numberBetween($min = 100, $max = 2000),

        'restaurant_id' => $restaurant_id->random()->id,

    ];
});
