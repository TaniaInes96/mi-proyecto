<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista11;

class Lista11Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    	Lista11::create([
    		'cod' => '1',
    		'nivel' => 'Investigación',
    	]);
    	Lista11::create([
    		'cod' => '2',
    		'nivel' => 'Seguimiento',
    	]);
    	Lista11::create([
    		'cod' => '3',
    		'nivel' => 'Solución',
    	]);
    }
}
