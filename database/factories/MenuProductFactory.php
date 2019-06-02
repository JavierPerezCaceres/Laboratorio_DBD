<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MenuProduct;
use App\Menu;
use App\Product;
use Faker\Generator as Faker;

$factory->define(MenuProduct::class, function (Faker $faker) {
	$product_id = DB::table('products')->select('id')->get();
	$menu_id = DB::table('menus')->select('id')->get();

    return [
        'price' 		=> $faker->numberBetween($min = 1000, $max = 8000),
        
        'menu_id' 		=> $menu_id->random()->id,
        'product_id' 	=> $product_id->random()->id,
    ];
});
