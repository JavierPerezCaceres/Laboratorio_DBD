<?php

use App\CardPayment;
use Illuminate\Database\Seeder;

class CardPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(CardPayment::class,10)->create();
    }
}
