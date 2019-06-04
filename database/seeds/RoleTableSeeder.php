<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Role::class,10)->create();
        //Admin con id = 1
        Role::create([ 'type' => 'Administrador', 'description' => 'Tiene permisos para modificar información de la página' ]);
        //Restaurant con id = 2
        Role::create([ 'type' => 'Restaurante', 'description' => 'Ofrece Comida' ]);
        //Cliente con id = 3
        Role::create([ 'type' => 'Cliente', 'description' => 'Consumidor el cual hace pedidos' ]);
    }
}
