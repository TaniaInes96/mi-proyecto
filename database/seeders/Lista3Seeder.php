<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista3;

class Lista3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lista3::create([
        	'cod' => '1',
        	'descripcion' => 'Procesos',
        ]);
        Lista3::create([
        	'cod' => '2',
        	'descripcion' => 'Personas',
        ]);
        Lista3::create([
        	'cod' => '3',
        	'descripcion' => 'Tecnología de información',
        ]);
        Lista3::create([
        	'cod' => '4',
        	'descripcion' => 'Eventos externos',
        ]);
        Lista3::create([
        	'cod' => '5',
        	'descripcion' => 'Infraestructura',
        ]);
    }
}
