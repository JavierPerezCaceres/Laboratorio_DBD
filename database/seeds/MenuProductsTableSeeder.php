<?php

use Illuminate\Database\Seeder;
use App\MenuProduct;

class MenuProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MenuProduct::class,10)->create();
    }
}
