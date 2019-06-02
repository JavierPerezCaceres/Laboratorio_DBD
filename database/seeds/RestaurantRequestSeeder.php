<?php

use Illuminate\Database\Seeder;
use App\RestaurantRequest;

class RestaurantRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(RestaurantRequest::class,10)->create();
    }
}
