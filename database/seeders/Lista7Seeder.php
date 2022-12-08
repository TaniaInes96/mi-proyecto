<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista7;

class Lista7Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lista7::create([
        	'cod' => '00000000000',
			'departamento' => 'No hay un lugar identificado donde sucedió el evento de pérdida',
			'provincia' => '',
			'municipio' => '',
			'ciudad' => '',
        ]);
    }
}
