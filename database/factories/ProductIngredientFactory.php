<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ProductIngredient;
use App\Product;
use App\Ingredient;
use Faker\Generator as Faker;

$factory->define(ProductIngredient::class, function (Faker $faker) {
    return [
        'product_id' 	=> App\Product::all()->random()->id,
        'ingredient_id' => App\Ingredient::all()->random()->id,
    ];
});
