<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista10;

class Lista10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lista10::create([
        	'cod' => '11',
	    	'tipo_entidad' => 'Ent de Intermediación Fin',
	    	'linea_negocio' => 'Finanzas corporativas',
	    	'nivel' => 'Finanzas de Administraciones locales / públicas',
        ]);
        Lista10::create([
        	'cod' => '12',
	    	'tipo_entidad' => 'Ent de Intermediación Fin',
	    	'linea_negocio' => 'Finanzas corporativas',
	    	'nivel' => 'B1 de inversión',
        ]);
        Lista10::create([
        	'cod' => '13',
	    	'tipo_entidad' => 'Ent de Intermediación Fin',
	    	'linea_negocio' => 'Finanzas corporativas',
	    	'nivel' => 'Servicios de asesoramiento',
        ]);
        Lista10::create([
        	'cod' => '21',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Negociación y ventas',
        	'nivel' => 'Ventas',
        ]);
        Lista10::create([
        	'cod' => '22',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Negociación y ventas',
        	'nivel' => 'Creación de Mercado',
        ]);
        Lista10::create([
        	'cod' => '23',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Negociación y ventas',
        	'nivel' => 'Posiciones propias',
        ]);
        Lista10::create([
        	'cod' => '24',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Negociación y ventas',
        	'nivel' => 'Tesorería',
        ]);

        Lista10::create([
        	'cod' => '31',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'B1 minorista',
        	'nivel' => 'B1 minorista',
        ]);
        Lista10::create([
        	'cod' => '32',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'B1 minorista',
        	'nivel' => 'B1 privada',
        ]);
        Lista10::create([
        	'cod' => '33',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'B1 minorista',
        	'nivel' => 'Servicios de tarjetas',
        ]);
        Lista10::create([
        	'cod' => '41',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'B1 comercial',
        	'nivel' => 'B1 comercial',
        ]);

        Lista10::create([
        	'cod' => '51',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Pago y liquidación',
        	'nivel' => 'Clientes externos',
        ]);
        Lista10::create([
        	'cod' => '61',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Servicios de agencia',
        	'nivel' => 'Custodia',
        ]);
        Lista10::create([
        	'cod' => '62',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Servicios de agencia',
        	'nivel' => 'Agencia para empresas',
        ]);

        Lista10::create([
        	'cod' => '63',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Servicios de agencia',
        	'nivel' => 'Fideicomisos de empresas',
        ]);
        Lista10::create([
        	'cod' => '71',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Administración de activos',
        	'nivel' => 'Administración discrecional de fondos',
        ]);
        Lista10::create([
        	'cod' => '72',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Administración de activos',
        	'nivel' => 'Administración no discrecional de fondos',
        ]);
        Lista10::create([
        	'cod' => '81',
        	'tipo_entidad' => 'Ent de Intermediación Fin',
        	'linea_negocio' => 'Intermediación minorista',
        	'nivel' => 'Intermediación minorista',
        ]);





        Lista10::create([
        	'cod' => '91',
        	'tipo_entidad' => 'Ent de Servicios Fin Complementarios',
        	'linea_negocio' => 'Entidad de Servicios Financieros Complementarios',
        	'nivel' => 'Servicios de pago',
        ]);
        Lista10::create([
        	'cod' => '92',
        	'tipo_entidad' => 'Ent de Servicios Fin Complementarios',
        	'linea_negocio' => 'Entidad de Servicios Financieros Complementarios',
        	'nivel' => 'Entidades de Intermediación Financiera',
        ]);
        Lista10::create([
        	'cod' => '93',
        	'tipo_entidad' => 'Ent de Servicios Fin Complementarios',
        	'linea_negocio' => 'Entidad de Servicios Financieros Complementarios',
        	'nivel' => 'Clientes externos',
        ]);
        Lista10::create([
        	'cod' => '99',
        	'tipo_entidad' => 'Otros',
        	'linea_negocio' => 'No existe pérdida monetaria o línea de negocio asociada al evento',
        	'nivel' => '',
        ]);
    }
}
