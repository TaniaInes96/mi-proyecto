<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lista2;

class Lista2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Lista2::create([
        	'cod' => '1a01',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Actividades no autorizadas',
			'clase_evento' => 'Operaciones no reveladas (intencionalmente)',
        ]);
        Lista2::create([
        	'cod' => '1a02',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Actividades no autorizadas',
			'clase_evento' => 'Operaciones no autorizadas (con pérdidas pecuniarias)',
        ]);
        Lista2::create([
        	'cod' => '1a03',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Actividades no autorizadas',
			'clase_evento' => 'Valoración errónea de posiciones (intencional)',
        ]);
        Lista2::create([
        	'cod' => '1a99',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Actividades no autorizadas',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '1b01',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Fraude / fraude crediticio/ depósitos sin valor',
        ]);
        Lista2::create([
        	'cod' => '1b02',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Hurto / extorsión / malversación / robo',
        ]);
        Lista2::create([
        	'cod' => '1b03',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Apropiación indebida de activos',
        ]);
        Lista2::create([
        	'cod' => '1b04',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Destrucción dolosa de activos',
        ]);
        Lista2::create([
        	'cod' => '1b05',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Falsificación',
        ]);
        Lista2::create([
        	'cod' => '1b06',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Utilización de cheques sin fondos',
        ]);
        Lista2::create([
        	'cod' => '1b07',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Contrabando',
        ]);
        Lista2::create([
        	'cod' => '1b08',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Apropiación de cuentas, de identidad, etc.',
        ]);
        Lista2::create([
        	'cod' => '1b09',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Incumplimiento / evasión de impuestos (intencional)',
        ]);
        Lista2::create([
        	'cod' => '1b10',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Soborno / cohecho',
        ]);
        Lista2::create([
        	'cod' => '1b11',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Abuso de información privilegiada (no a favor de la empresa)',
        ]);
        Lista2::create([
        	'cod' => '1b99',
			'tipo_evento' => 'Fraude interno',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '2a01',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Hurto/robo',
        ]);
        Lista2::create([
        	'cod' => '2a02',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Falsificación',
        ]);
        Lista2::create([
        	'cod' => '2a03',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Utilización de cheques sin fondos',
        ]);
        Lista2::create([
        	'cod' => '2a04',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Suplantación de identidad',
        ]);
        Lista2::create([
        	'cod' => '2a99',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Hurto y fraude',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '2b01',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Seguridad de los sistemas',
			'clase_evento' => 'Daños por ataques informáticos',
        ]);
        Lista2::create([
        	'cod' => '2b02',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Seguridad de los sistemas',
			'clase_evento' => 'Robo de información (con pérdidas pecuniarias)',
        ]);
        Lista2::create([
        	'cod' => '2b99',
			'tipo_evento' => 'Fraude externo',
			'subtipo_evento' => 'Seguridad de los sistemas',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '3a01',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo',
			'subtipo_evento' => 'Relaciones laborales',
			'clase_evento' => 'Cuestiones relativas a remuneración',
        ]);
        Lista2::create([
        	'cod' => '3a02',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo',
			'subtipo_evento' => 'Relaciones laborales',
			'clase_evento' => 'Cuestiones relativas a prestaciones sociales',
        ]);
        Lista2::create([
        	'cod' => '3a03',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo',
			'subtipo_evento' => 'Relaciones laborales',
			'clase_evento' => 'Cuestiones relativas a extinción de contratos',
        ]);
        Lista2::create([
        	'cod' => '3a04',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo',
			'subtipo_evento' => 'Relaciones laborales',
			'clase_evento' => 'Organización laboral',
        ]);
        Lista2::create([
        	'cod' => '3a99',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo',
			'subtipo_evento' => 'Relaciones laborales',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '3b01',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Higiene y seguridad en el trabajo',
			'clase_evento' => 'Responsabilidad en general (resbalones, etc.)',
        ]);
        Lista2::create([
        	'cod' => '3b02',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Higiene y seguridad en el trabajo',
			'clase_evento' => 'Casos relacionados con las normas de higiene y seguridad en el trabajo',
        ]);
        Lista2::create([
        	'cod' => '3b03',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Higiene y seguridad en el trabajo',
			'clase_evento' => 'Indemnización a los trabajadores',
        ]);
        Lista2::create([
        	'cod' => '3b99',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Higiene y seguridad en el trabajo',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '3c01',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Diversidad y discriminación',
			'clase_evento' => 'Todo tipo de discriminación',
        ]);
        Lista2::create([
        	'cod' => '3c99',
			'tipo_evento' => 'Relaciones laborales y seguridad en el puesto de trabajo (cont.)',
			'subtipo_evento' => 'Diversidad y discriminación',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '4a01',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Abusos de confianza / incumplimiento de pautas',
        ]);
        Lista2::create([
        	'cod' => '4a02',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Aspectos de adecuación / divulgación de información (know your customer KYC, etc.)',
        ]);
        Lista2::create([
        	'cod' => '4a03',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Quebrantamiento de la privacidad de información sobre clientes minoristas',
        ]);
        Lista2::create([
        	'cod' => '4a04',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Quebrantamiento de privacidad',
        ]);
        Lista2::create([
        	'cod' => '4a05',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Ventas agresivas',
        ]);
        Lista2::create([
        	'cod' => '4a06',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Confusión de cuentas',
        ]);
        Lista2::create([
        	'cod' => '4a07',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Abuso de información confidencial',
        ]);
        Lista2::create([
        	'cod' => '4a08',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Responsabilidad del prestamista',
        ]);
        Lista2::create([
        	'cod' => '4a99',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Adecuación, divulgación de información y confianza',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '4b01',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Prácticas restrictivas de la competencia',
        ]);
        Lista2::create([
        	'cod' => '4b02',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Prácticas comerciales / de mercado improcedentes',
        ]);
        Lista2::create([
        	'cod' => '4b03',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Manipulación del mercado',
        ]);
        Lista2::create([
        	'cod' => '4b04',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Abuso de información privilegiada (en favor de la empresa)',
        ]);
        Lista2::create([
        	'cod' => '4b05',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Actividades no autorizadas.',
        ]);
        Lista2::create([
        	'cod' => '4b06',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Blanqueo de dinero',
        ]);
        Lista2::create([
        	'cod' => '4b99',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Prácticas empresariales o de mercado improcedentes',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '4c01',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Productos defectuosos',
			'clase_evento' => 'Defectos del producto (no autorizado, etc.)',
        ]);
        Lista2::create([
        	'cod' => '4c02',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Productos defectuosos',
			'clase_evento' => 'Error de los modelos',
        ]);
        Lista2::create([
        	'cod' => '4c99',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Productos defectuosos',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '4d01',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Selección, patrocinio y riesgos',
			'clase_evento' => 'Ausencia de investigación a clientes conforme a las directrices',
        ]);
        Lista2::create([
        	'cod' => '4d02',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Selección, patrocinio y riesgos',
			'clase_evento' => 'Superación de los límites de riesgo frente a clientes',
        ]);
        Lista2::create([
        	'cod' => '4d99',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Selección, patrocinio y riesgos',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '4e01',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Actividades de asesoramiento',
			'clase_evento' => 'Litigios sobre resultados de las actividades de asesoramiento',
        ]);
        Lista2::create([
        	'cod' => '4e99',
			'tipo_evento' => 'Clientes, productos y prácticas empresariales',
			'subtipo_evento' => 'Actividades de asesoramiento',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '5a01',
			'tipo_evento' => 'Daños a activos materiales',
			'subtipo_evento' => 'Desastres y otros acontecimientos',
			'clase_evento' => 'Pérdidas por desastres naturales',
        ]);
        Lista2::create([
        	'cod' => '5a02',
			'tipo_evento' => 'Daños a activos materiales',
			'subtipo_evento' => 'Desastres y otros acontecimientos',
			'clase_evento' => 'Pérdidas humanas por causas externas (terrorismo, vandalismo)',
        ]);
        Lista2::create([
        	'cod' => '5a99',
			'tipo_evento' => 'Daños a activos materiales',
			'subtipo_evento' => 'Desastres y otros acontecimientos',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '6a01',
			'tipo_evento' => 'Incidencias en el negocio y fallos en los sistemas',
			'subtipo_evento' => 'Sistemas',
			'clase_evento' => 'Hardware',
        ]);
        Lista2::create([
        	'cod' => '6a02',
			'tipo_evento' => 'Incidencias en el negocio y fallos en los sistemas',
			'subtipo_evento' => 'Sistemas',
			'clase_evento' => 'Software',
        ]);
        Lista2::create([
        	'cod' => '6a03',
			'tipo_evento' => 'Incidencias en el negocio y fallos en los sistemas',
			'subtipo_evento' => 'Sistemas',
			'clase_evento' => 'Telecomunicaciones',
        ]);
        Lista2::create([
        	'cod' => '6a04',
			'tipo_evento' => 'Incidencias en el negocio y fallos en los sistemas',
			'subtipo_evento' => 'Sistemas',
			'clase_evento' => 'Interrupción / incidencias en el suministro',
        ]);
        Lista2::create([
        	'cod' => '6a99',
			'tipo_evento' => 'Incidencias en el negocio y fallos en los sistemas',
			'subtipo_evento' => 'Sistemas',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7a01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Comunicación defectuosa',
        ]);
        Lista2::create([
        	'cod' => '7a02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Errores de introducción de datos, mantenimiento o descarga',
        ]);
        Lista2::create([
        	'cod' => '7a03',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Incumplimiento de plazos o de responsabilidades',
        ]);
        Lista2::create([
        	'cod' => '7a04',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Ejecución errónea de modelos / sistemas',
        ]);
        Lista2::create([
        	'cod' => '7a05',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Error contable / atribución a entidades erróneas',
        ]);
        Lista2::create([
        	'cod' => '7a06',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Errores en otras tareas',
        ]);
        Lista2::create([
        	'cod' => '7a07',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Fallo en la entrega',
        ]);
        Lista2::create([
        	'cod' => '7a08',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Fallo en la gestión del colateral',
        ]);
        Lista2::create([
        	'cod' => '7a09',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Mantenimiento de datos de referencia',
        ]);
        Lista2::create([
        	'cod' => '7a99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos',
			'subtipo_evento' => 'Recepción, ejecución y mantenimiento de operaciones',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7b01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Seguimiento y presentación de informes',
			'clase_evento' => 'Incumplimiento de la obligación de informar',
        ]);
        Lista2::create([
        	'cod' => '7b02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Seguimiento y presentación de informes',
			'clase_evento' => 'Inexactitud de informes externos (con generación de pérdidas)',
        ]);
        Lista2::create([
        	'cod' => '7b99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Seguimiento y presentación de informes',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7c01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Aceptación de clientes y documentación',
			'clase_evento' => 'Inexistencia de autorizaciones / rechazos de clientes',
        ]);
        Lista2::create([
        	'cod' => '7c02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Aceptación de clientes y documentación',
			'clase_evento' => 'Documentos jurídicos inexistentes / incompletos',
        ]);
        Lista2::create([
        	'cod' => '7c99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Aceptación de clientes y documentación',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7d01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Gestión de cuentas de clientes',
			'clase_evento' => 'Acceso no autorizado a cuentas',
        ]);
        Lista2::create([
        	'cod' => '7d02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Gestión de cuentas de clientes',
			'clase_evento' => 'Registros incorrectos de clientes (con generación de pérdidas)',
        ]);
        Lista2::create([
        	'cod' => '7d03',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Gestión de cuentas de clientes',
			'clase_evento' => 'Pérdida o daño de activos de clientes por negligencia',
        ]);
        Lista2::create([
        	'cod' => '7d99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Gestión de cuentas de clientes',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7e01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Contrapartes comerciales',
			'clase_evento' => 'Fallos de contrapartes distintas de clientes',
        ]);
        Lista2::create([
        	'cod' => '7e02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Contrapartes comerciales',
			'clase_evento' => 'Otros litigios con contrapartes distintas de clientes',
        ]);
        Lista2::create([
        	'cod' => '7e99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Contrapartes comerciales',
			'clase_evento' => 'Otros',
        ]);
        Lista2::create([
        	'cod' => '7f01',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Distribuidores y proveedores',
			'clase_evento' => 'Subcontratación',
        ]);
        Lista2::create([
        	'cod' => '7f02',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Distribuidores y proveedores',
			'clase_evento' => 'Litigios con distribuidores',
        ]);
        Lista2::create([
        	'cod' => '7f99',
			'tipo_evento' => 'Ejecución, entrega y gestión de procesos (cont.)',
			'subtipo_evento' => 'Distribuidores y proveedores',
			'clase_evento' => 'Otros',
        ]);
    }
}
