<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista5;

class Lista5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lista5::create([
        	'cod'=> '01',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Asumir      y      mantener      Clientes/Usuarios, Contrapartes y Relaciones de Comercio. ',
        ]);
        Lista5::create([
        	'cod'=> '02',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Captura y Documentación de Operaciones.  ',
        ]);
        Lista5::create([
        	'cod'=> '03',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Desarrollo, Diseño, y    Mantenimiento    de Productos y Servicios. ',
        ]);
        Lista5::create([
        	'cod'=> '04',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Entrega productos y servicios.  ',
        ]);
        Lista5::create([
        	'cod'=> '05',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Mercado de Productos y Servicios.  ',
        ]);
        Lista5::create([
        	'cod'=> '06',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Operaciones Contables.  ',
        ]);
        Lista5::create([
        	'cod'=> '07',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Vender o alcanzar acuerdos para Conductas Específicas en los Negocios ',
        ]);
        Lista5::create([
        	'cod'=> '09',
			'proceso'=> 'Negocio',
			'subproceso'=> 'Otros Procesos de Negocio.  ',
        ]);
        Lista5::create([
        	'cod'=> '10',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Administración de Información Tecnológica.  ',
        ]);
        Lista5::create([
        	'cod'=> '11',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Administración de los Bienes e Instalaciones Físicas. ',
        ]);
        Lista5::create([
        	'cod'=> '12',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Administración de Recursos Humanos.  ',
        ]);
        Lista5::create([
        	'cod'=> '13',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Administración de Sistemas de Riesgo.  ',
        ]);
        Lista5::create([
        	'cod'=> '14',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Gestión de Capital, Fondos y Liquidez.  ',
        ]);
        Lista5::create([
        	'cod'=> '15',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Gestión     de     Proveedores     y     Servicios Terciarizados. ',
        ]);
        Lista5::create([
        	'cod'=> '16',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Gestionar el cumplimiento,  Legal,  Gobierno Corporativo y Auditoría. ',
        ]);
        Lista5::create([
        	'cod'=> '17',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Reporte de Gestión Financiera y Tributación.  ',
        ]);
        Lista5::create([
        	'cod'=> '19',
			'proceso'=> 'Corporativos',
			'subproceso'=> 'Otros procesos corporativos.  ',
        ]);
        Lista5::create([
        	'cod'=> '99',
			'proceso'=> 'Otros',
			'subproceso'=> 'Procesos no Relacionados/Situaciones en las que   no   está   implicando   ningún   proceso específico. ',
        ]);
    }
}
