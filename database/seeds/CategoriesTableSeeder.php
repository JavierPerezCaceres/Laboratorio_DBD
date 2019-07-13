<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=> 'Arepas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Asados',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Bebidas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Cafetería',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Carnes',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Ceviches',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Chorrillanas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Churrascos',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Árabe',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida China',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Chilena',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Japonesa ',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Mexicana',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Peruana ',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Rápida',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Vegana',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Comida Vegetariana',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Completos',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Desayunos',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Empanadas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Ensaladas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Hamburguesas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Helados',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Pastas ',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Pescados y Marisco',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Pizzas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Pollo ',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Postres y Tortas',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Sándwiches ',
            'created_at' => now()
        ]);

        DB::table('categories')->insert([
            'name'=> 'Sushi',
            'created_at' => now()
        ]);
    }
}
