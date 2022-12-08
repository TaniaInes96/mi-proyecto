<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/sb-admin-2.min.css') }} " rel="stylesheet">
</head>
<body>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Linea de Negocio' }}</h1>
    </div>
    <table class="table table-bordered">
    	<tbody>
    		<tr>
    			<td>{{ 'Código de Envío' }}</td>
    			<td>{{ $linea_negocios->codigo_de_envio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha de corte' }}</td>
    			<td>{{ $linea_negocios->fecha_de_corte }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código del evento' }}</td>
    			<td>{{ $linea_negocios->codigo_de_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Linea de Negocio' }}</td>
    			<td>{{ $linea_negocio->nivel }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Línea de Negocio nivel 3' }}</td>
    			<td>{{ $linea_negocios->linea_nivel3 }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo de Envio' }}</td>
    			<td>{{ $linea_negocios->tipo_envio }}</td>
    		</tr>
    	</tbody>
    </table>
</body>
</html>