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
            'contact_number'=> '+56983758205',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '1990',
            'wait_time'=> '30',
            'street' => 'Manuel Rodriguez',
            'number' => '3854',
            'user_id'=> '1',
            'category_restaurant_id'=> '1',
            'district_id' => '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Doggis',
            'contact_number'=> '+56938943580',
            'opening_hour'=> '10:00',
            'closing_hour'=> '21:00',
            'person_cost'=> '3390',
            'wait_time'=> '20',
            'street' => 'Anibal Pinto',
            'number' => '384',
            'user_id'=> '2',
            'category_restaurant_id'=> '1',
            'district_id' => '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Pedro, Juan y Diego',
            'contact_number'=> '+56924356480',
            'opening_hour'=> '11:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '2790',
            'wait_time'=> '30',
            'street' => 'Los Libertadores',
            'number' => '9485',
            'user_id'=> '3',
            'category_restaurant_id'=> '1',
            'district_id' => '2',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Telepizza',
            'contact_number'=> '+56937493724',
            'opening_hour'=> '10:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '5590',
            'wait_time'=> '10',
            'street' => 'La Moneda',
            'number' => '3845',
            'user_id'=> '4',
            'category_restaurant_id'=> '1',
            'district_id' => '2',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Burger King',
            'contact_number'=> '+56937489539',
            'opening_hour'=> '10:00',
            'closing_hour'=> '21:00',
            'person_cost'=> '4590',
            'wait_time'=> '15',
            'street' => 'Baquedano',
            'number' => '582',
            'user_id'=> '15',
            'category_restaurant_id'=> '1',
            'district_id' => '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Martuca',
            'contact_number'=> '+56998489539',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3290',
            'wait_time'=> '30',
            'street' => 'Lo Heroes',
            'number' => '213',
            'user_id'=> '14',
            'category_restaurant_id'=> '1',
            'district_id' => '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Holy Moly',
            'contact_number'=> '+56998364927',
            'opening_hour'=> '10:00',
            'closing_hour'=> '19:00',
            'person_cost'=> '2990',
            'wait_time'=> '30',
            'street' => 'Parque Bustamante',
            'number' => '86432',
            'user_id'=> '12',
            'category_restaurant_id'=> '1',
            'district_id' => '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Govindas',
            'contact_number'=> '+56980958775',
            'opening_hour'=> '08:00',
            'closing_hour'=> '18:00',
            'person_cost'=> '4790',
            'wait_time'=> '30',
            'street' => 'Caupolican',
            'number' => '4582',
            'user_id'=> '9',
            'category_restaurant_id'=> '3',
            'district_id' => '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'VegetFood',
            'contact_number'=> '+56980954374',
            'opening_hour'=> '10:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '3790',
            'wait_time'=> '35',
            'street' => 'Ecuador',
            'number' => '49592',
            'user_id'=> '7',
            'category_restaurant_id'=> '3',
            'district_id' => '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'VeganFood',
            'contact_number'=> '+56980954374',
            'opening_hour'=> '09:30',
            'closing_hour'=> '19:00',
            'person_cost'=> '5590',
            'wait_time'=> '10',
            'street' => 'Lautaro',
            'number' => '47111',
            'user_id'=> '4',
            'category_restaurant_id'=> '4',
            'district_id' => '4',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'TaiwanFood',
            'contact_number'=> '+569472854374',
            'opening_hour'=> '11:30',
            'closing_hour'=> '19:30',
            'person_cost'=> '7390',
            'wait_time'=> '20',
            'street' => 'Avenida Brasil',
            'number' => '123',
            'user_id'=> '8',
            'category_restaurant_id'=> '2',
            'district_id' => '4',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'ChinaMaster',
            'contact_number'=> '+56957344374',
            'opening_hour'=> '12:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3490',
            'wait_time'=> '30',
            'street' => 'Avenida Peru',
            'number' => '9538',
            'user_id'=> '8',
            'category_restaurant_id'=> '2',
            'district_id' => '1',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'La Piojera',
            'contact_number'=> '+56923442374',
            'opening_hour'=> '09:00',
            'closing_hour'=> '23:30',
            'person_cost'=> '3190',
            'wait_time'=> '30',
            'street' => 'Tarapaca',
            'number' => '3847',
            'user_id'=> '11',
            'category_restaurant_id'=> '5',
            'district_id' => '4',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Charly Dog',
            'contact_number'=> '+56937205710',
            'opening_hour'=> '08:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '7690',
            'wait_time'=> '30',
            'street' => 'Bandera',
            'number' => '9584',
            'user_id'=> '9',
            'category_restaurant_id'=> '5',
            'district_id' => '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'Burguesía',
            'contact_number'=> '+56976642274',
            'opening_hour'=> '10:00',
            'closing_hour'=> '22:00',
            'person_cost'=> '11000',
            'wait_time'=> '30',
            'street' => 'Manuel Rodriguez',
            'number' => '3854',
            'user_id'=> '5',
            'category_restaurant_id'=> '6',
            'district_id' => '3',
            'created_at' => now()
        ]);

        DB::table('restaurants')->insert([
            'name'=> 'SushiLook',
            'contact_number'=> '+5696454374',
            'opening_hour'=> '12:00',
            'closing_hour'=> '23:00',
            'person_cost'=> '3890',
            'wait_time'=> '30',
            'street' => 'San Diego',
            'number' => '402',
            'user_id'=> '3',
            'category_restaurant_id'=> '6',
            'district_id' => '2',
            'created_at' => now()
        ]);

        
    }
}
