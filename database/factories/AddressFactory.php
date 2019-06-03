<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
	$user_id = DB::table('users')->select('id')->get();
	$district_id = DB::table('districts')->select('id')->get();

    return [
        'street' => $faker->streetName,
        'number' => $faker->streetAddress,
        'district_id' => $district_id->random()->id,
        'user_id' => $user_id->random()->id
    ];
});
