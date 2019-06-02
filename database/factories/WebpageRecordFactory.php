<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\WebpageRecord;
use Faker\Generator as Faker;

$factory->define(WebpageRecord::class, function (Faker $faker) {
    return [
        'action'->$faker->text(200),    ];
});
