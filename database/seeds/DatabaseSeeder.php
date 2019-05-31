<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(MenusTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        //$this->call(IngredientsTableSeeder::class);
        //$this->call(ProductIngredientsTableSeeder::class);
        //$this->call(MenuProductsTableSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(CardPaymentSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(PurchaseOrderSeeder::class);
    }
}
