<?php

use Illuminate\Database\Seeder;
use App\CategoryRestaurant;

class CategoryRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_restaurants')->insert([
            'name'=> 'Comida Rápida',
            'created_at' => now()
        ]);

        DB::table('category_restaurants')->insert([
            'name'=> 'Asiático',
            'created_at' => now()
        ]);

        DB::table('category_restaurants')->insert([
            'name'=> 'Vegetariano',
            'created_at' => now()
        ]);

        DB::table('category_restaurants')->insert([
            'name'=> 'Vegano',
            'created_at' => now()
        ]);

        DB::table('category_restaurants')->insert([
            'name'=> 'Tradicional',
            'created_at' => now()
        ]);

        DB::table('category_restaurants')->insert([
            'name'=> 'Tenedor Libre',
            'created_at' => now()
        ]);
    }
}
