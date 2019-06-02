<?php

use Illuminate\Database\Seeder;
use App\TableReservation;

class TableReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TableReservation::class,10)->create();
    }
}
