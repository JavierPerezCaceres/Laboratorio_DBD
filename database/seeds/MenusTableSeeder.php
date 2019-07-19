<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name'=> 'Pollo Italiano', // JUAN MAESTRO
            'total_price' => '3390',
            'discount' => '0',
            'restaurant_id' => '1',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Lomo Chacarero', // JUAN MAESTRO
            'total_price' => '3970',
            'discount' => '0',
            'restaurant_id' => '1',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Churrasco Italiano', // JUAN MAESTRO
            'total_price' => '3890',
            'discount' => '0',
            'restaurant_id' => '1',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Barros Luco', // JUAN MAESTRO
            'total_price' => '3990',
            'discount' => '0',
            'restaurant_id' => '1',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Mechada Italiana', // JUAN MAESTRO
            'total_price' => '4390',
            'discount' => '0',
            'restaurant_id' => '1',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Italiano', // DOGGIS
            'total_price' => '2890',
            'discount' => '0',
            'restaurant_id' => '2',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Dinámico', // DOGGIS
            'total_price' => '2890',
            'discount' => '0',
            'restaurant_id' => '2',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Crispy', // DOGGIS
            'total_price' => '2890',
            'discount' => '0',
            'restaurant_id' => '2',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Ranchero', // DOGGIS
            'total_price' => '2890',
            'discount' => '0',
            'restaurant_id' => '2',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Napolitano', // DOGGIS
            'total_price' => '2890',
            'discount' => '0',
            'restaurant_id' => '2',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Juan', // PEDRO, JUAN Y DIEGO.
            'total_price' => '4490',
            'discount' => '0',
            'restaurant_id' => '3',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pedro', // PEDRO, JUAN Y DIEGO.
            'total_price' => '4490',
            'discount' => '0',
            'restaurant_id' => '3',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Diego', // PEDRO, JUAN Y DIEGO.
            'total_price' => '4490',
            'discount' => '0',
            'restaurant_id' => '3',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Gringa', // PEDRO, JUAN Y DIEGO.
            'total_price' => '3590',
            'discount' => '0',
            'restaurant_id' => '3',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Italiana', // PEDRO, JUAN Y DIEGO.
            'total_price' => '3590',
            'discount' => '0',
            'restaurant_id' => '3',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Americana', // TELEPIZZA
            'total_price' => '7490',
            'discount' => '0',
            'restaurant_id' => '4',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Mundial', // TELEPIZZA
            'total_price' => '8490',
            'discount' => '0',
            'restaurant_id' => '4',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Especialidad de la Casa', // TELEPIZZA
            'total_price' => '8990',
            'discount' => '0',
            'restaurant_id' => '4',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Delicada', // TELEPIZZA
            'total_price' => '8490',
            'discount' => '0',
            'restaurant_id' => '4',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Rodeo', // TELEPIZZA
            'total_price' => '8490',
            'discount' => '0',
            'restaurant_id' => '4',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Whooper', // Burguer King
            'total_price' => '3500',
            'discount' => '0',
            'restaurant_id' => '5',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Rodeo King', // Burguer King
            'total_price' => '3900',
            'discount' => '0',
            'restaurant_id' => '5',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Steakhouse', // Burguer King
            'total_price' => '4200',
            'discount' => '0',
            'restaurant_id' => '5',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Doble Italiana', // Burguer King
            'total_price' => '3500',
            'discount' => '0',
            'restaurant_id' => '5',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Tocino King', // Burguer King
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '5',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Palta Reina', // Martuca
            'total_price' => '3900',
            'discount' => '0',
            'restaurant_id' => '6',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Martuca', // Martuca
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '6',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Barros Jarpa', // Martuca
            'total_price' => '3500',
            'discount' => '0',
            'restaurant_id' => '6',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Chacarero', // Martuca
            'total_price' => '4200',
            'discount' => '0',
            'restaurant_id' => '6',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Chilena', // Martuca
            'total_price' => '4200',
            'discount' => '0',
            'restaurant_id' => '6',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cheese Burger', // Holy Moly
            'total_price' => '5890',
            'discount' => '0',
            'restaurant_id' => '7',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cheese Bacon Burger', // Holy Moly
            'total_price' => '6490',
            'discount' => '0',
            'restaurant_id' => '7',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cheese Jalapeño Burger', // Holy Moly
            'total_price' => '6490',
            'discount' => '0',
            'restaurant_id' => '7',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Special Burger', // Holy Moly
            'total_price' => '8490',
            'discount' => '0',
            'restaurant_id' => '7',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Hamburguesa Veggie', // Holy Moly
            'total_price' => '6490',
            'discount' => '0',
            'restaurant_id' => '7',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Lentejas Guisadas', // Govindas
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '8',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Paella Vegana', // Govindas
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '8',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Carbonada de Vegetales', // Govindas
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '8',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Estofado de Gluten', // Govindas
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '8',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Fideos con Salsa de Tomate', // Govindas
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '8',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pizza Vegetariana', // Veget Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '9',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Hamburguesa Vegetariana', // Veget Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '9',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Carbonada Vegetariana', // Veget Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '9',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Budin de Zapallo Italiano Vegetariano', // Veget Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '9',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Ensalada de Cous-Cous', // Veget Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '9',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Patatas con Verduras al Curry', // Vegan Food
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '10',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Panecillos Asiáticos', // Vegan Food
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '10',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Chips de Tofu', // Vegan Food
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '10',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pizza Vegana', // Vegan Food
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '10',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Hamburguesa Vegana de Lentejas', // Vegan Food
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '10',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Sopa de Fideos con Vaca', // Taiwan Food
            'total_price' => '6590',
            'discount' => '0',
            'restaurant_id' => '11',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Xiaolongbao', // Taiwan Food
            'total_price' => '5990',
            'discount' => '0',
            'restaurant_id' => '11',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cerdo Cocido en el Arroz', // Taiwan Food
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '11',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Tortilla de Ostras', // Taiwan Food
            'total_price' => '7990',
            'discount' => '0',
            'restaurant_id' => '11',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Tofu Apestoso', // Taiwan Food
            'total_price' => '5990',
            'discount' => '0',
            'restaurant_id' => '11',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Carne Mongoliana', // China Master
            'total_price' => '5200',
            'discount' => '0',
            'restaurant_id' => '12',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cerdo Mongoliano', // China Master
            'total_price' => '5200',
            'discount' => '0',
            'restaurant_id' => '12',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pollo Mongoliano', // China Master
            'total_price' => '5200',
            'discount' => '0',
            'restaurant_id' => '12',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Chapsui Especial', // China Master
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '12',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pollo Champiñón', // China Master
            'total_price' => '5000',
            'discount' => '0',
            'restaurant_id' => '12',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pernil con Papas', // La Piojera
            'total_price' => '7500',
            'discount' => '0',
            'restaurant_id' => '13',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Sandwich de Pernil', // La Piojera
            'total_price' => '2500',
            'discount' => '0',
            'restaurant_id' => '13',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Prietas con Papas', // La Piojera
            'total_price' => '7000',
            'discount' => '0',
            'restaurant_id' => '13',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cazuela de Vacuno', // La Piojera
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '13',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Pichanga', // La Piojera
            'total_price' => '6000',
            'discount' => '0',
            'restaurant_id' => '13',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Hot-Dog', // Charly Dog
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '14',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'As Completo', // Charly Dog
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '14',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Vienesa Completo', // Charly Dog
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '14',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'As Italiano', // Charly Dog
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '14',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Vienesa Italiana', // Charly Dog
            'total_price' => '4500',
            'discount' => '0',
            'restaurant_id' => '14',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Clásica', // Burguesía
            'total_price' => '8100',
            'discount' => '0',
            'restaurant_id' => '15',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Juicy Lucy', // Burguesía
            'total_price' => '8600',
            'discount' => '0',
            'restaurant_id' => '15',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Grillada', // Burguesía
            'total_price' => '8900',
            'discount' => '0',
            'restaurant_id' => '15',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Hawaiana', // Burguesía
            'total_price' => '8300',
            'discount' => '0',
            'restaurant_id' => '15',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Cuarto Burgués', // Burguesía
            'total_price' => '8000',
            'discount' => '0',
            'restaurant_id' => '15',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 1', // Sushilook
            'total_price' => '3900',
            'discount' => '0',
            'restaurant_id' => '16',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 2', // Sushilook
            'total_price' => '4200',
            'discount' => '0',
            'restaurant_id' => '16',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 3', // Sushilook
            'total_price' => '4300',
            'discount' => '0',
            'restaurant_id' => '16',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 4', // Sushilook
            'total_price' => '5200',
            'discount' => '0',
            'restaurant_id' => '16',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 5', // Sushilook
            'total_price' => '5400',
            'discount' => '0',
            'restaurant_id' => '16',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 1', // defecto
            'total_price' => '3900',
            'discount' => '0',
            'restaurant_id' => '17',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 2', // defecto
            'total_price' => '4200',
            'discount' => '0',
            'restaurant_id' => '17',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 3', // defecto
            'total_price' => '4300',
            'discount' => '0',
            'restaurant_id' => '17',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 4', // defecto
            'total_price' => '5200',
            'discount' => '0',
            'restaurant_id' => '17',
            'created_at' => now()
        ]);

        DB::table('menus')->insert([
            'name'=> 'Combo 5', // defecto
            'total_price' => '5400',
            'discount' => '0',
            'restaurant_id' => '17',
            'created_at' => now()
        ]);

    }
}
