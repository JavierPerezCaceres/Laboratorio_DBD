<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MenuProduct;
use App\Menu;
use App\Product;
use Faker\Generator as Faker;

$factory->define(MenuProduct::class, function (Faker $faker) {
    return [
        'price' 		=> $faker->numberBetween($min = 1000, $max = 8000),
        'menu_id' 		=> App\Menu::all()->random()->id,
        'product_id' 	=> App\Product::all()->random()->id,
    ];
});
