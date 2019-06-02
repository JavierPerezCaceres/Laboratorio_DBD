<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        
        'product_id' => App\Product::all()->random()->id,
        'category_id' => App\Category::all()->random()->id,

    ];
});
