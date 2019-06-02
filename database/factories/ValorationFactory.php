<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Valoration;
use App\User;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Valoration::class, function (Faker $faker) {
    return [
        'score'=>$faker->numberBetween($min=0,$max=5),
        'commentary'=>$faker->text(200),
        'user_id'=> App\User::all()->random()->id,
        'restaurant_id'=>App\Restaurant::all()->random()->id,
    ];
});
