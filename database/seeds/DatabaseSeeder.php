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
        $this->call(RoleTableSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(UsersTableSeeder::class);

<<<<<<< HEAD
=======

        $this->call(RoleTableSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(UsersTableSeeder::class);

>>>>>>> master
        $this->call(RestaurantsTableSeeder::class);
        $this->call(MenusTableSeeder::class);

        $this->call(ProductsTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(ProductIngredientsTableSeeder::class);
        $this->call(MenuProductsTableSeeder::class);
        $this->call(DeliverySeeder::class);
        $this->call(WebpageRecordSeeder::class);
        $this->call(ValorationSeeder::class);
        $this->call(RestaurantRequestSeeder::class);

        $this->call(CardPaymentSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(PurchaseOrderSeeder::class);
        $this->call(MenuReservationsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(RestaurantRequestSeeder::class);
        $this->call(TablesTableSeeder::class);
        $this->call(TableReservationsTableSeeder::class);

        $this->call(ValorationSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(AddressTableSeeder::class);

    }
}
