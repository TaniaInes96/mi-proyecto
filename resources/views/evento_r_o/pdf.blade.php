<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/sb-admin-2.min.css') }} " rel="stylesheet">
</head>
<body>

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Evento Riesgo Operativo' }}</h1>
    </div>
    <table class="table table-bordered">
    	<tbody>
    		<tr>
    			<td>{{ 'Código de Envío:' }}</td>
    			<td>{{ $eventos->codigo_de_envio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha de corte:' }}</td>
    			<td>{{ $eventos->fecha_de_corte }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código del evento:' }}</td>
    			<td>{{ $eventos->codigo_de_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo de entrada:' }}</td>
    			<td>{{ $tipo_de_entrada->subtipo_entidad }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Descripción resumida del evento:' }}</td>
    			<td>{{ $eventos->descripcion }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Factor de riesgo:' }}</td>
    			<td>{{ $factor_riesgo->descripcion }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Cargo(s) involucrado(s):' }}</td>
    			<td>{{ $eventos->cargos }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Área(s) involucrada(s):' }}</td>
    			<td>{{ $eventos->areas }}</td>
    		</tr>
            @if(!is_null($categoria))
    		<tr>
    			<td>{{ 'Categoría:' }}</td>
    			<td>{{ $categoria->categoria }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Pérdida por riesgo (Valor contable):' }}</td>
    			<td>{{ $eventos->perdida_valor_contable }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Pérdida por riesgo (Valor de mercado):' }}</td>
    			<td>{{ $eventos->perdida_valor_mercado }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Gastos asociados a la pérdida:' }}</td>
    			<td>{{ $eventos->gastos }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Monto total recuperado:' }}</td>
    			<td>{{ $eventos->monto_total }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Monto recuperado por cobertura de seguros:' }}</td>
    			<td>{{ $eventos->monto_recuperado }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Recuperación activo:' }}</td>
    			<td>{{ $eventos->recuperacion_activo }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Relación riesgo de crédito:' }}</td>
    			<td>{{ $eventos->relacion_riesgo }}</td>
    		</tr>
            @endif
    		<tr>
    			<td>{{ 'Evento critico:' }}</td>
    			<td>{{ $eventos->evento_critico }}</td>
    		</tr>
            @if(!is_null($categoria))
    		<tr>
    			<td>{{ 'Detalles Evento critico:' }}</td>
    			<td>{{ $eventos->detalle_evento_critico }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Moneda y montos evento:' }}</td>
    			<td>{{ $eventos->monto_evento }}</td>
    		</tr>
            @endif
    		<tr>
    			<td>{{ 'Fecha Descubrimiento:' }}</td>
    			<td>{{ $eventos->fecha_descubrimiento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Hora Descubrimiento:' }}</td>
    			<td>{{ $eventos->hora_descubrimiento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha Inicio:' }}</td>
    			<td>{{ $eventos->fecha_inicio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Hora Inicio:' }}</td>
    			<td>{{ $eventos->hora_inicio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha Finalización:' }}</td>
    			<td>{{ $eventos->fecha_final }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Hora Finalización:' }}</td>
    			<td>{{ $eventos->hora_final }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Elaborador:' }}</td>
    			<td>{{ $eventos->elaborador }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Revisor:' }}</td>
    			<td>{{ $eventos->revisor }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Aprobador:' }}</td>
    			<td>{{ $eventos->aprobador }}</td>
    		</tr>
            @if(!is_null($estado_evento))
    		<tr>
    			<td>{{ 'Estado evento:' }}</td>
    			<td>{{ $estado_evento->estado_evento }}</td>
    		</tr>

    		<tr>
    			<td>{{ 'Detalle estado del evento:' }}</td>
    			<td>{{ $eventos->detalle_estado_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código de Evento Relacionado:' }}</td>
    			<td>{{ $eventos->codigo_de_evento_relacionado }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo Envío:' }}</td>
    			<td>{{ $eventos->tipo_envio }}</td>
    		</tr>
            @endif
    	</tbody>
    </table>

</body>
</html>