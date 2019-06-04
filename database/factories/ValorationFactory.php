<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Valoration;
use App\User;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Valoration::class, function (Faker $faker) {
	$user_id = DB::table('users')->select('id')->get();
	$restaurant_id = DB::table('restaurants')->select('id')->get();

    return [
        'score'=>$faker->numberBetween($min=0,$max=5),
        'commentary'=>$faker->text(200),
        
        'user_id'=> $user_id->random()->id,
        'restaurant_id'=>$restaurant_id->random()->id,
    ];
});
