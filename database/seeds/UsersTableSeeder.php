<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nombres = ['Alejandro','Tomas','Marcela','Roberto','sofia','Javier','Alejandra','Maria','Jorge','Mauricio','Pedro','Carla','Nicole','Vicente','Jose'];
    	$correos = ['alejandro@prueba.com','tomas@prueba.com','marcela@prueba.com','roberto@prueba.com','sofia@prueba.com','javier@prueba.com','alejandra@prueba.com','maria@prueba.com','jorge@prueba.com','mauricio@prueba.com','pedro@prueba.com','carla@prueba.com','nicole@prueba.com','vicente@prueba.com','jose@prueba.com'];

    	

    	for ($i=0; $i < 15; $i++) 
    	{
            $role_id = DB::table('roles')->select('id')->get();
            $role_random = DB::table('roles')->inRandomOrder()->first();
    		DB::table('users')->insert([
            'name' => $nombres[$i],
        	'email' => $correos[$i],
        	'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        	'remember_token' => Str::random(10),
        	'role_id' => $role_random->id, 
        	'client_id' => $i+1,
            'created_at' => now()
        ]);

    	}
    }
}
