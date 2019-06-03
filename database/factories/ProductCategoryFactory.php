<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
	$product_id = DB::table('products')->select('id')->get();
	$category_id = DB::table('categories')->select('id')->get();

    return [
        
        'product_id' => $product_id->random()->id,
        'category_id' => $category_id->random()->id,

    ];
});
