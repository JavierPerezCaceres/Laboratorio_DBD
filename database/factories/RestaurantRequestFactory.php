<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\RestaurantRequest;
use App\User;
use Faker\Generator as Faker;

$factory->define(RestaurantRequest::class, function (Faker $faker) {
	$user_id = DB::table('users')->select('id')->get();
    return [
        'company_rut'=>$faker->unique()->numberBetween($min = 100000000, $max = 999999999),
        'cod_sis'=>$faker->unique()->numberBetween($min = 100000000, $max = 999999999),
        'owner_name'=>$faker->name,
        'condition'=>$faker->numberBetween($min=0,$max=1),
        'user_id'=> $user_id->random()->id,
    ];
});
