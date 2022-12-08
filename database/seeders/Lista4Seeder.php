<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista4;

class Lista4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lista4::create([
        	'cod' => '101',
    		'canal' => 'Terminales de punto de venta-POS',
        ]);
        Lista4::create([
        	'cod' => '102',
    		'canal' => 'Red de comunicación internet',
        ]);
        Lista4::create([
        	'cod' => '103',
    		'canal' => 'Red de comunicación telefonía fija',
        ]);
        Lista4::create([
        	'cod' => '104',
    		'canal' => 'Red de comunicación telefonía móvil (Banca por celular)',
        ]);
        Lista4::create([
        	'cod' => '105',
    		'canal' => 'Billetera móvil',
        ]);
        Lista4::create([
        	'cod' => '106',
    		'canal' => 'Agencia Fija',
        ]);
        Lista4::create([
        	'cod' => '107',
    		'canal' => 'Agencia Móvil',
        ]);
        Lista4::create([
        	'cod' => '108',
    		'canal' => 'Cajero Automático Especial Externo - Con Recinto',
        ]);
        Lista4::create([
        	'cod' => '109',
    		'canal' => 'Cajero Automático Especial Externo - Sin Recinto',
        ]);
        Lista4::create([
        	'cod' => '110',
    		'canal' => 'Cajero Automático Especial Interno',
        ]);
        Lista4::create([
        	'cod' => '111',
    		'canal' => 'Cajero Automático Externo - Con Recinto',
        ]);
        Lista4::create([
        	'cod' => '112',
    		'canal' => 'Cajero Automático Externo - Sin Recinto',
        ]);
        Lista4::create([
        	'cod' => '113',
    		'canal' => 'Cajero Automático Interno',
        ]);
        Lista4::create([
        	'cod' => '114',
    		'canal' => 'Cajero Automático para Personas con Discapacidad Externo - Con Recinto ',
        ]);
        Lista4::create([
        	'cod' => '115',
    		'canal' => 'Cajero Automático para Personas con Discapacidad Interno',
        ]);
        Lista4::create([
        	'cod' => '201',
    		'canal' => 'Local Compartido',
        ]);
        Lista4::create([
        	'cod' => '202',
    		'canal' => 'Oficina Central',
        ]);
        Lista4::create([
        	'cod' => '203',
    		'canal' => 'Oficina de Corresponsalía',
        ]);
        Lista4::create([
        	'cod' => '204',
    		'canal' => 'Oficina Externa',
        ]);
        Lista4::create([
        	'cod' => '205',
    		'canal' => 'Oficina Ferial',
        ]);
        Lista4::create([
        	'cod' => '206',
    		'canal' => 'Punto de Atención Corresponsal Fin.',
        ]);
        Lista4::create([
        	'cod' => '207',
    		'canal' => 'Punto de Atención Corresponsal No Fin.',
        ]);
        Lista4::create([
        	'cod' => '208',
    		'canal' => 'Punto de Distribución',
        ]);
        Lista4::create([
        	'cod' => '209',
    		'canal' => 'Punto Promocional Fijo',
        ]);
        Lista4::create([
        	'cod' => '210',
    		'canal' => 'Sucursal',
        ]);
        Lista4::create([
        	'cod' => '211',
    		'canal' => 'Ventanilla',
        ]);
        Lista4::create([
        	'cod' => '999',
    		'canal' => 'Otros canales no contemplados en la lista',
        ]);
    }
}
