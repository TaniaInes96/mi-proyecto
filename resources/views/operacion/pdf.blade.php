<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/sb-admin-2.min.css') }} " rel="stylesheet">
</head>
<body>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Operacion' }}</h1>
    </div>
    <table class="table table-bordered">
    	<tbody>
    		<tr>
    			<td>{{ 'Código de Envío' }}</td>
    			<td>{{ $operacion->codigo_de_envio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha de corte' }}</td>
    			<td>{{ $operacion->fecha_de_corte }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código del evento' }}</td>
    			<td>{{ $operacion->codigo_de_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Operacion' }}</td>
    			<td>{{ $operaci->operacion }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo de Envio' }}</td>
    			<td>{{ $operacion->tipo_envio }}</td>
    		</tr>
    	</tbody>
    </table>
</body>
</html>