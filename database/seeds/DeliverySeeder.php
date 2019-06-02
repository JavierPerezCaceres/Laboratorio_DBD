<?php

use Illuminate\Database\Seeder;
use App\Delivery;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Delivery::class,10)->create();
    }
}
