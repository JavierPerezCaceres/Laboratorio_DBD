<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array('Administrador', 'Restaurant', 'Default')),
        'description' => $faker->text
    ];
});
