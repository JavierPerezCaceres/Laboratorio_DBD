<?php

use Illuminate\Database\Seeder;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name' => 'Tarapacá',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Antofagasta',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Atacama',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Coquimbo',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Valparaiso',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Libertador General Bernardo OHiggins',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Maule',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Biobío',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Araucanía ',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Los Lagos',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Aysén',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Magallanes y de la Antártica Chilena',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Metropolitana de Santiago',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Los Ríos',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Arica y Parinacota',
            'created_at' => now()
        ]);

        DB::table('cities')->insert([
            'name' => 'Ñuble',
            'created_at' => now()
        ]);
    }
}
