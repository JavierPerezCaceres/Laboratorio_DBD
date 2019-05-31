<?php

use Illuminate\Database\Seeder;

class PurchaseOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PurchaseOrder::class,10)->create();
    }
}
