<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Evento::create([
	        'codigo_de_envio' => ,
			'fecha_de_corte' => ,
			'codigo_de_evento' => ,
			'id_tipo_de_entrada' => ,
			'descripcion' => ,
			'id_factor_de_riesgo' => ,
			'cargos' => ,
			'areas' =>,
			'id_categoria' => ,
			'perdida_valor_contable' => ,
			'perdida_valor_mercado' => ,
			'gastos' => ,
			'monto_total' => ,
			'monto_recuperado' => ,
			'recuperacion_activo' => ,
			'relacion_riesgo' => ,
			'evento_critico' => ,
			'detalle_evento_critico' => ,
			'monto_evento' => ,
			'fecha_descubrimiento' => ,
			'hora_descubrimiento' => ,
			'fecha_inicio' => ,
			'hora_inicio' => ,
			'fecha_final' => ,
			'hora_final' => ,
			'elaborador' => ,
			'revisor' => ,
			'aprobador' => ,
			'id_estado_evento' => ,
			'detalle_estado_evento' => ,
			'codigo_de_evento_relacionado' => ,
			'tipo_envio' => ,
        ]);
    }
}
