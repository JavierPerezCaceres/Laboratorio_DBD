<?php

use Illuminate\Database\Seeder;
use App\RestaurantRequest;

class RestaurantRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant_requests')->insert([  
        'company_rut' => rand (100000000, 999999999),
        'cod_sis' =>  rand (100000000, 999999999),
        'owner_name' => "Jorge Ayala",
        'name' => 'Juan Maestro',
        'condition' => TRUE,
        'user_id' => 16
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Vicente Hernández",
            'name' => 'Doggis',
            'condition' => TRUE,
            'user_id' => 17
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Javier Pérez",
            'name' => 'Pedro, Juan y Diego',
            'condition' => TRUE,
            'user_id' => 18
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Jose Ibaceta",
            'name' => 'Telepizza',
            'condition' => TRUE,
            'user_id' => 19
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Nicole Martín",
            'name' => 'Burger King',
            'condition' => TRUE,
            'user_id' => 20
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Tommy King",
            'name' => 'Martuca',
            'condition' => TRUE,
            'user_id' => 21
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Bernardo Fuentes",
            'name' => 'Holy Moly',
            'condition' => TRUE,
            'user_id' => 22
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Alejandro Paredes",
            'name' => 'Govindas',
            'condition' => TRUE,
            'user_id' => 23
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Michael Vegan",
            'name' => 'VeganFood',
            'condition' => TRUE,
            'user_id' => 24
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Enrique Veget",
            'name' => 'VegetFood',
            'condition' => TRUE,
            'user_id' => 25
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Enrique Veget",
            'name' => 'TaiwanFood',
            'condition' => TRUE,
            'user_id' => 26
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Jackie Gutierrez",
            'name' => 'China Master',
            'condition' => TRUE,
            'user_id' => 27
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Leandro Ramirez",
            'name' => 'La Piojera',
            'condition' => TRUE,
            'user_id' => 28
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Leandro Ramirez",
            'name' => 'Charly Dog',
            'condition' => TRUE,
            'user_id' => 29
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Leandro Ramirez",
            'name' => 'Burguesía',
            'condition' => TRUE,
            'user_id' => 30
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Sebastian Lillo",
            'name' => 'Sushilook',
            'condition' => TRUE,
            'user_id' => 31
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Pablo Gutierrez",
            'name' => 'China Master',
            'condition' => FALSE,
            'user_id' => 1
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Pedro Ramirez",
            'name' => 'La Piojera',
            'condition' => FALSE,
            'user_id' => 1
        ]);

        DB::table('restaurant_requests')->insert([  
            'company_rut' => rand (100000000, 999999999),
            'cod_sis' =>  rand (100000000, 999999999),
            'owner_name' => "Hernandez Lillo",
            'name' => 'Sushilook',
            'condition' => FALSE,
            'user_id' => 1
        ]);
    }
}
