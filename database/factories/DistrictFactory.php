<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
	$city_id = DB::table('cities')->select('id')->get();
    return [
        'name' => $faker->state,
        'city_id' => $city_id->random()->id
    ];
});
