<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=> 'Hamburguesa Pollo', // 1
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Papas Fritas', // 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9 - 10 - 11 - 12 - 13 - 14 - 15 - 16 - 17 - 18 - 19 - 20 - 21 - 22 - 23 - 24 - 25
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Bebida', // 1 - 2 - 3 - 4 - 5 - 6 - 7 - 8 - 9 - 10 - 11 - 12 - 13 - 14 - 15 - 16 - 17 - 18 - 19 - 20 - 21 - 22- 23 - 24 - 25 -26 - 27 - 28 - 29 - 30
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Lomo Chacarero', // 2
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Churrasco Italiano', // 3
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Barros Luco', // 4
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Mechada Italiana', // 5
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Italiana', // 6 - 69
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Dinámico', // 7
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Crispy', // 8
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Ranchero', // 9
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Napolitano', // 10
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Juan', // 11
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pedro', // 12
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Diego', // 13
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Gringa', // 14
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pizza Italiana', // 15
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pizza Americana', // 16
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pizza Mundial', // 17
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Especialidad de la Casa', // 18
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pizza Delicada', // 19
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Rodeo', // 20
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Whooper', // 21
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Rodeo King', // 22
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'SteakHouse', // 23
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Doble Italiana', // 24
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Tocino King', // 25
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Palta Reina', // 26
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Martuca', // 27
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Barros Jarpa', // 28
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Chacarera', // 29
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Chilena', // 30
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cheese Burger', // 31
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cheese Bacon Burger', // 32
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cheese Jalapeño Burger', // 33
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Special Burger', // 34
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Hamburguesa Beggie', // 35 - 42
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Lentejas Guisadas', // 36
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Paella Vegana', // 37
            'created_at' => now()
        ]);
        

        DB::table('products')->insert([
            'name'=> 'Carbonada de Vegetales', // 38 - 43
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Fideos con Salsa de Tomate', // 39
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Estofado de Gluten', // 40
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pizza Vegetariana', // 41 - 49
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Budin de Zapallo Italiano Vegetariano', // 44
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Ensalada de Cous-Cous', // 45
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Patatas con Verduras al Curry', // 46
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Panecillos Asiáticos', // 47
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Chips de Tofu', // 48
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Hamburguesa Vegana de Lentejas', // 50
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Sopa de Fideos con Vaca', // 51
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Xiaolongbao', // 52
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cerdo Cocido en el Arroz', // 53
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Tortilla de Ostras', // 54
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Tofu Apestoso', // 55
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Carne Mongoliana', // 56
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cerdo Mongoliana', // 57
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pollo Mongoliano', // 58
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pollo Champiñon', // 59
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pernil Con Papas', // 60
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Sandwich de Pernil', // 61
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Prietas con Papas', // 62
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cazuela de Vacuno', // 63
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Pichanga', // 64
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Hot-Dog', // 65
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'As Completo', // 66
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Vienesa Completo', // 67
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'As Italiano', // 68
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Clásica', // 70
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Juicy Lucy', // 71
            'created_at' => now()
        ]);
        
        DB::table('products')->insert([
            'name'=> 'Grillada', // 72
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Hawaiana', // 73
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Cuarto Burgués', // 74
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Combo 1', // 75
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Combo 2', // 76
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Combo 3', // 77
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Combo 4', // 78
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Combo 5', // 79
            'created_at' => now()
        ]);

        DB::table('products')->insert([
            'name'=> 'Chapsui Especial', // 79
            'created_at' => now()
        ]);
    }
}
