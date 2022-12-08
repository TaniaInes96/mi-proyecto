<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista8;

class Lista8Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lista8::create([
        	'cod' => '1',
        	'categoria' => 'Eventos de riesgo que generan pérdidas y afectan el Estado de Ganancias y Pérdidas',
        ]);
        Lista8::create([
        	'cod' => '2',
        	'categoria' => 'Eventos de riesgo que generan pérdidas y no afectan el Estado de Ganancias y Pérdidas',
        ]);
        Lista8::create([
        	'cod' => '3',
        	'categoria' => 'Eventos de riesgo que no generan pérdidas y no afectan el Estado de Ganancias y Pérdidas',
        ]);
        Lista8::create([
        	'cod' => '4',
        	'categoria' => 'Eventos de riesgo que generan ganancias',
        ]);
    }
}
