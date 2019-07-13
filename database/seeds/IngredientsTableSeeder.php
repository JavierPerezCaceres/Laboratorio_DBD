<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bebestible = ['Coca Cola','Coca Cola Light', 'Coca Cola Zero', 'Fanta', 'Fanta Light', 'Fanta Zero','Jugo'];

        DB::table('ingredients')->insert([
            'name'=> 'Pan', // 1 - 4 - 5 - 6 - 7 - 8 - 9 - 10 - 11 - 12 - 13 - 14 - 15 - 16 - 17 - 23 - 24 - 25 - 26 - 27 - 30 - 31 - 32 - 33 - 34 - 35 - 36 - 61 - 67 - 68 - 69
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Carne de Pollo', // 1 - 28 - 60 - 61
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Palta', // 1 - 5 - 7 - 8 - 9 - 17 - 26 - 28 - 69
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Tomate', // 1 - 4 - 5 - 7 - 8 - 9 - 11 - 12 - 13 - 14 - 15 - 17 - 23 - 25 - 26 - 31 - 32 - 47 - 69
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Ketchup', // 16 - 25 - 27 - 37
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Mostaza', // 16 - 27 - 37
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Mayonesa', // 1 - 5 - 7 - 8 - 9 - 14 - 17 - 23 - 25 - 26 - 28 - 32 - 37 - 68 - 69
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Papas', // 2 - 38 - 48 - 65 
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Esta se debe dar a elegir', // 3
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Lomo', // 4
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=>  'Porotos Verdes', // 4 - 31 - 40
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Churrasco', // 5 - 6 - 29
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Queso', // 6 - 10 - 12 - 13 - 14 - 15 - 16 - 18 - 19 - 20 - 21 - 22 - 24 - 25 - 27 - 29 - 30 - 33 - 34 - 35 -36 
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Mechada', // 7
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Vienesa', // 8 - 9 - 10 - 11 - 12 - 31 - 67 - 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Salsa Americana', // 9 - 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Salsa Verde', // 9 - 32
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Tocino', // 10 - 20 - 27 - 34
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Cebolla', // 10 - 11 - 14 - 15 - 23 - 25 - 29 - 37 - 38 - 42 - 47 - 48 - 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Oregano', // 12 - 50  
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Hamburguesa Vacuno', // 13 - 14 - 15 - 16 - 17 - 23 - 24 - 25 - 26 - 27 - 33 - 34 - 35 - 36
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Lechuga', // 13 - 14 - 15 - 23 - 25 - 28 - 37 - 52
            'created_at' => now()
        ]);
        
        DB::table('ingredients')->insert([
            'name'=> 'Pepinillo', // 15 - 16 - 27 - 37 - 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Masa', // 18 - 19 - 20 - 21 - 22 - 43 - 49 - 54 - 56
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Salsa de Tomate', // 18 - 19 - 20 - 21 - 22 - 25 - 37 - 43 - 52 - 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Pepperoni', // 18 - 19
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Carne de Vacuno', // 19 - 20 - 22 - 52 - 58 - 65 -69
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Aceitunas', // 19 - 21 - 28 - 43 - 47
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Champiñon', // 20 - 21 - 43 - 52
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Pimenton', // 20 - 37 - 39 - 40 - 43 - 55
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Choclo', // 21 - 43
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Salsa BBQ', // 22 - 36
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Aros de Cebolla', // 24 - 37
            'created_at' => now()
        ]);
        
        DB::table('ingredients')->insert([
            'name'=> 'Jamon', // 30 - 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Jalapeño', // 35 - 36
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Hamburguesa  de Porotos', // 37
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Lentejas', // 38 - 52
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Zanahoria', // 38 - 39 - 40 - 47 - 48 - 52 - 57 - 61 - 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Arroz', // 39 - 46 - 55 - 58 - 59 - 60 - 61
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Brocoli', // 39 - 40 - 57
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Zapallo', // 40 - 65
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Gluten', // 42
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Naranja', // 42
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Diente de Ajo', // 46
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Fideos', // 41 - 52 - 65
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Zapallo Italiano', // 46
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Cous-Cous', // 47
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Curry', // 48
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Espinaca', // 48
            'created_at' => now()
        ]);
        
        DB::table('ingredients')->insert([
            'name'=> 'Cilantro', // 49
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Menta', // 49
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Tofu', // 50 - 57
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Paprika', // 50
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Tomillo', // 50
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Perejil', // 53
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Carne de Cerdo', // 54 - 55 - 59
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Salsa de Soja', // 54 - 58 - 59 - 60 - 61
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Huevos', // 56
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Ostras', // 56
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Pernil', // 62 - 63
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Ají', // 63 - 64 
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Prieta', // 64 
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Coliflor', // 66
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Chucrut', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piña', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Akihiko', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Iroito', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Edu', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Ceviche Roll', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas California', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Gyosas', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Nigiri', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Lucas', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Nico', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Citrus', // 68
            'created_at' => now()
        ]);

        DB::table('ingredients')->insert([
            'name'=> 'Piezas Acevichado', // 68
            'created_at' => now()
        ]);
    }
}
