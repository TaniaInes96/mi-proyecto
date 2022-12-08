<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista1;

class Lista1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	Lista1::create([
    		'cod' => '101',
    		'tipo_entidad' => 'Entradas principales',
    		'subtipo_entidad' => 'Entrada principal B1',
    	]);
    	Lista1::create([
    		'cod' => '102',
    		'tipo_entidad' => 'Entradas principales',
    		'subtipo_entidad' => 'Entrada principal B2',
    	]);
    	Lista1::create([
    		'cod' => '201',
    		'tipo_entidad' => 'Entradas medias',
    		'subtipo_entidad' => 'Entrada media B1',
    	]);
    	Lista1::create([
    		'cod' => '202',
    		'tipo_entidad' => 'Entradas medias',
    		'subtipo_entidad' => 'Entrada media B2',
    	]);
    	Lista1::create([
    		'cod' => '203',
    		'tipo_entidad' => 'Entradas medias',
    		'subtipo_entidad' => 'Entrada media B3',
    	]);
    	Lista1::create([
    		'cod' => '204',
    		'tipo_entidad' => 'Entradas medias',
    		'subtipo_entidad' => 'Entrada media B4',
    	]);
    	Lista1::create([
    		'cod' => '205',
    		'tipo_entidad' => 'Entradas medias',
    		'subtipo_entidad' => 'Entrada media B5',
    	]);
    	Lista1::create([
    		'cod' => '301',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B1',
    	]);
    	Lista1::create([
    		'cod' => '302',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B2',
    	]);
    	Lista1::create([
    		'cod' => '303',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B3',
    	]);
    	Lista1::create([
    		'cod' => '304',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B4',
    	]);
    	Lista1::create([
    		'cod' => '305',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B5',
    	]);
    	Lista1::create([
    		'cod' => '306',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B6',
    	]);
    	Lista1::create([
    		'cod' => '307',
    		'tipo_entidad' => 'Entradas inusuales',
    		'subtipo_entidad' => 'Entrada inusual B7',
    	]);
    }
}
