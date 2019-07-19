<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            'created_at' => now() ]);
    	}
      DB::table('users')->insert([
          'name' => 'pedidos RightNow',
          'email' => 'pedidosRightNow@gmail.com',
          'password' => Hash::make('prueba'), // password
          'remember_token' => Str::random(10),
          'role_id' => 1,
          'client_id' => null,
          'created_at' => now() ]);

          DB::table('users')->insert([
              'name' => 'restaurant prueba',
              'email' => 'restaurantPrueba@gmail.com',
              'password' => Hash::make('prueba'), // password
              'remember_token' => Str::random(10),
              'role_id' => 2,
              'client_id' => null,
              'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Juan Maestro',
            'email' => 'juanmaestro@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Doggis',
            'email' => 'Doggis@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Pedro, Juan y Diego',
            'email' => 'PedroJuanyDiego@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Telepizza',
            'email' => 'Telepizza@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Burger King',
            'email' => 'BurgerKing@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Martuca',
            'email' => 'Martuca@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'HolyMoly',
            'email' => 'HolyMoly@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Govindas',
            'email' => 'Govindas@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'VegetFood',
            'email' => 'VegetFood@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'VeganFood',
            'email' => 'VeganFood@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'TaiwanFood',
            'email' => 'TaiwanFood@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'ChinaMaster',
            'email' => 'ChinaMaster@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'La Piojera',
            'email' => 'LaPiojera@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Charly Dog',
            'email' => 'CharlyDog@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'Burguesía',
            'email' => 'Burguesía@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

        DB::table('users')->insert([
            'name' => 'SushiLook',
            'email' => 'SushiLook@gmail.com',
            'password' => 'asdasdasd', // password
            'remember_token' => Str::random(10),
            'role_id' => 2,
            'client_id' => null,
            'created_at' => now() ]);

    }
}
