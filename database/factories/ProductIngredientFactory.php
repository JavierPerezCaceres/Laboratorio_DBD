<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductIngredient;
use App\Product;
use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(ProductIngredient::class, function (Faker $faker) {
	$product_id = DB::table('products')->select('id')->get();
	$ingredient_id = DB::table('ingredients')->select('id')->get();
    return [
        'product_id' 	=> $product_id->random()->id,
        'ingredient_id' => $ingredient_id->random()->id,
    ];
});
