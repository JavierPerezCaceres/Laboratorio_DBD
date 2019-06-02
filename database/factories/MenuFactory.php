<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Menu;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'total_price' => $faker->numberBetween($min = 2000, $max = 9000),
        'discount' => $faker->numberBetween($min = 100, $max = 2000),

        'restaurant_id' => $faker->restaurant_id::all()->random()->id,

    ];
});
