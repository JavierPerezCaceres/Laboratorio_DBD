<?php

use Illuminate\Database\Seeder;
use App\Valoration;

class ValorationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Valoration::class,100)->create();
    }
}
