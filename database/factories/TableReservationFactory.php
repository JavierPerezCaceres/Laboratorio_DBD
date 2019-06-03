<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\TableReservation;
use App\Table;
use App\PurchaseOrder;
use Faker\Generator as Faker;

$factory->define(TableReservation::class, function (Faker $faker) {
    $purchase_order_id = DB::table('purchase_orders')->select('id')->get();

    return [
        'reserve_number' => $faker->numberBetween($min = 1, $max = 25),
        'reserve_name' => $faker->name,
        'people_quantity' => $faker->numberBetween($min = 2, $max = 9),
        'reserve_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year', $timezone = null),
        'reserve_hour' => $faker->time($format = 'H:i:s', $max = 'now'),
        'reserve_confirmation' => $faker->numberBetween($min = 0, $max = 1),

        'table_id' => $table->random()->id,
        'purchase_order_id' => $purchase_order_id->random()->id
    ];
});
