<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/sb-admin-2.min.css') }} " rel="stylesheet">
</head>
<body>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Proceso' }}</h1>
    </div>
    <table class="table table-bordered">
    	<tbody>
    		<tr>
    			<td>{{ 'Código de Envío' }}</td>
    			<td>{{ $procesos->codigo_de_envio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha de corte' }}</td>
    			<td>{{ $procesos->fecha_de_corte }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código del evento' }}</td>
    			<td>{{ $procesos->codigo_de_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Proceso' }}</td>
    			<td>{{ $proceso->subproceso }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Detalles Proceso' }}</td>
    			<td>{{ $proceso->detalle }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo de Envio' }}</td>
    			<td>{{ $procesos->tipo_envio }}</td>
    		</tr>
    	</tbody>
    </table>
</body>
</html>