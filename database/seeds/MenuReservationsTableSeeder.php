<?php

use Illuminate\Database\Seeder;
use App\MenuReservation;


class MenuReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MenuReservation::class,10)->create();
    }
}
