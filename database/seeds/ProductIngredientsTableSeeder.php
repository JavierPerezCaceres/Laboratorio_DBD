<?php

use Illuminate\Database\Seeder;
use App\ProductIngredient;


class ProductIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductIngredient::class,10)->create();
    }
}
