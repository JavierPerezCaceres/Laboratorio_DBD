<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Address;
use Faker\Generator as Faker;

$factory->define(Address::class, function (Faker $faker) {
	$client_id = DB::table('clients')->select('id')->get();
	$district_id = DB::table('districts')->select('id')->get();

    return [
        'street' => $faker->streetName,
        'number' => $faker->numberBetween($min = 1, $max = 6798),
        'district_id' => $district_id->random()->id,
        'client_id' => $client_id->random()->id
    ];
});
