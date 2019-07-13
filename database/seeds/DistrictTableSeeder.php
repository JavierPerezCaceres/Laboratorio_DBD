<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            'name' => 'Iquique',
            'city_id' => 1,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Alto Hospicio',
            'city_id' => 1,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Pozo Almonte',
            'city_id' => 1,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Camiña',
            'city_id' => 1,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Antofagasta',
            'city_id' => 2,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Mejillones',
            'city_id' => 2,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Sierra Gorda',
            'city_id' => 2,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Taltal',
            'city_id' => 2,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Copiapó',
            'city_id' => 3,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Caldera',
            'city_id' => 3,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Tierra Amarilla',
            'city_id' => 3,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Chañaral',
            'city_id' => 3,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Serena',
            'city_id' => 4,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coquimbo',
            'city_id' => 4,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Andacollo',
            'city_id' => 4,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Higuera',
            'city_id' => 4,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Valparaíso',
            'city_id' => 5,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Casablanca',
            'city_id' => 5,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Concón',
            'city_id' => 5,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Viña del Mar',
            'city_id' => 5,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Rancagua',
            'city_id' => 6,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Codegua',
            'city_id' => 6,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coinco',
            'city_id' => 6,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coltauco',
            'city_id' => 6,
            'created_at' => now()
        ]);
        
        DB::table('districts')->insert([
            'name' => 'Talca',
            'city_id' => 7,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Constitución',
            'city_id' => 7,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Curepto',
            'city_id' => 7,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Empedrado',
            'city_id' => 7,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Carlos',
            'city_id' => 16,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Fabián',
            'city_id' => 16,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coihueco',
            'city_id' => 16,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Ñiquén',
            'city_id' => 16,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Concepción',
            'city_id' => 8,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coronel',
            'city_id' => 8,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Chiguayante',
            'city_id' => 8,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Florida',
            'city_id' => 8,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Temuco',
            'city_id' => 9,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Carahue',
            'city_id' => 9,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Cunco',
            'city_id' => 9,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Curarrehue',
            'city_id' => 9,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Valdivia',
            'city_id' => 14,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Corral',
            'city_id' => 14,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Lanco',
            'city_id' => 14,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Máfil',
            'city_id' => 14,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Puerto Montt',
            'city_id' => 10,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Calbuco',
            'city_id' => 10,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Cochamó',
            'city_id' => 10,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Frutillar',
            'city_id' => 10,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Coyhaique',
            'city_id' => 11,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Lago Verde',
            'city_id' => 11,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Aysén',
            'city_id' => 11,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Cisnes',
            'city_id' => 11,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Punta Arenas',
            'city_id' => 12,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Laguna Blanca',
            'city_id' => 12,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Río Verde',
            'city_id' => 12,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Gregorio',
            'city_id' => 12,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Arica',
            'city_id' => 15,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Camarones',
            'city_id' => 15,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Putre',
            'city_id' => 15,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'General Lagos',
            'city_id' => 15,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Cerillos',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Reina',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Pudahuel',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Cerro Navia',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Las Condes',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Quilicura',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Conchalí',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Lo Barnechea',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Quinta Normal',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'El Bosque',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Lo Espejo',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Recoleta',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Estación Central',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Lo Prado',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Renca',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Huechuraba',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Macul',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Joaquín',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Independencia',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Maipú',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Miguel',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Cisterna',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Ñunoa',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Ramón',
            'city_id' => 13,
            'created_at' => now()
        ]);
        DB::table('districts')->insert([
            'name' => 'La Florida',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Pedro Aguirre Cerda',
            'city_id' => 13,
            'created_at' => now()
        ]);
        DB::table('districts')->insert([
            'name' => 'Santiago',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Granja',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Peñalolén',
            'city_id' => 13,
            'created_at' => now()
        ]);
        DB::table('districts')->insert([
            'name' => 'Vitacura',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'La Pintana',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Providencia',
            'city_id' => 13,
            'created_at' => now()
        ]);
        DB::table('districts')->insert([
            'name' => 'Comunas en otras provincias',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Padre Hurtado',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San Bernardo',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Puente Alto',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'Pirque',
            'city_id' => 13,
            'created_at' => now()
        ]);

        DB::table('districts')->insert([
            'name' => 'San José de Maipo',
            'city_id' => 13,
            'created_at' => now()
        ]);
        
    }
}
