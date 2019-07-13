<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name'=> 'Juan Maestro',
            'contact_number'=> '+1503457773580',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '1990',
            'wait_time'=> '30',
            'direction'=> 'Manuel Rodriguez 78',
            'user_id'=> '1',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Doggis',
            'contact_number'=> '+56938943580',
            'opening_hour'=> '10:00',
            'closing_hour'=> '21:00',
            'person_cost'=> '3390',
            'wait_time'=> '20',
            'direction'=> 'Moneda 75',
            'user_id'=> '2',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Pedro, Juan y Diego',
            'contact_number'=> '+5692435680',
            'opening_hour'=> '11:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '2790',
            'wait_time'=> '30',
            'direction'=> 'Monumento 574',
            'user_id'=> '3',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Telepizza',
            'contact_number'=> '+56937493724',
            'opening_hour'=> '10:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '5590',
            'wait_time'=> '10',
            'direction'=> 'Anibal Pinto 908',
            'user_id'=> '4',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Burger King',
            'contact_number'=> '+56937489539',
            'opening_hour'=> '10:00',
            'closing_hour'=> '21:00',
            'person_cost'=> '4590',
            'wait_time'=> '15',
            'direction'=> 'La Reforma 4289',
            'user_id'=> '15',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Martuca',
            'contact_number'=> '+56998489539',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3290',
            'wait_time'=> '30',
            'direction'=> 'Monarca 9876',
            'user_id'=> '14',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Holy Moly',
            'contact_number'=> '+56998364927',
            'opening_hour'=> '10:00',
            'closing_hour'=> '19:00',
            'person_cost'=> '2990',
            'wait_time'=> '30',
            'direction'=> 'El Paso 3847',
            'user_id'=> '12',
            'category_restaurant_id'=> '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Govindas',
            'contact_number'=> '+56980958775',
            'opening_hour'=> '08:00',
            'closing_hour'=> '18:00',
            'person_cost'=> '4790',
            'wait_time'=> '30',
            'direction'=> 'Palacio 27367',
            'user_id'=> '9',
            'category_restaurant_id'=> '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'VegetFood',
            'contact_number'=> '+56980954374',
            'opening_hour'=> '10:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '3790',
            'wait_time'=> '35',
            'direction'=> 'Rayen 394',
            'user_id'=> '7',
            'category_restaurant_id'=> '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'VeganFood',
            'contact_number'=> '+56980954374',
            'opening_hour'=> '09:30',
            'closing_hour'=> '19:00',
            'person_cost'=> '5590',
            'wait_time'=> '10',
            'direction'=> 'La Coraza 21',
            'user_id'=> '4',
            'category_restaurant_id'=> '4',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'TaiwanFood',
            'contact_number'=> '+569472854374',
            'opening_hour'=> '11:30',
            'closing_hour'=> '19:30',
            'person_cost'=> '7390',
            'wait_time'=> '20',
            'direction'=> 'La Colecta 87',
            'user_id'=> '8',
            'category_restaurant_id'=> '2',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'ChinaMaster',
            'contact_number'=> '+56957344374',
            'opening_hour'=> '12:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3490',
            'wait_time'=> '30',
            'direction'=> 'Pedro Aguirre Cerda 3985',
            'user_id'=> '8',
            'category_restaurant_id'=> '2',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'La Piojera',
            'contact_number'=> '+56923442374',
            'opening_hour'=> '09:00',
            'closing_hour'=> '23:30',
            'person_cost'=> '3190',
            'wait_time'=> '30',
            'direction'=> 'El Belloto 23',
            'user_id'=> '11',
            'category_restaurant_id'=> '5',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Charly Dog',
            'contact_number'=> '+1503457773580',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '7690',
            'wait_time'=> '30',
            'direction'=> 'Ecuador 1238',
            'user_id'=> '9',
            'category_restaurant_id'=> '5',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Burguesía',
            'contact_number'=> '+56976642274',
            'opening_hour'=> '10:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '11000',
            'wait_time'=> '30',
            'direction'=> 'Maraton 23',
            'user_id'=> '5',
            'category_restaurant_id'=> '6',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'SushiLook',
            'contact_number'=> '+5696454374',
            'opening_hour'=> '12:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3890',
            'wait_time'=> '30',
            'direction'=> 'Hipodromo 8894',
            'user_id'=> '3',
            'category_restaurant_id'=> '6',
            'created_at' => now()
        ]);

        
    }
}
