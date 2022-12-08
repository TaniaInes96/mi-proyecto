<!DOCTYPE html>
<html>
<head>
	<link href="{{ asset('css/sb-admin-2.min.css') }} " rel="stylesheet">
</head>
<body>
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ 'Cuenta Contable' }}</h1>
    </div>
    <table class="table table-bordered">
    	<tbody>
    		<tr>
    			<td>{{ 'Código de Envío:' }}</td>
    			<td>{{ $cuentas_contables->codigo_de_envio }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Fecha de corte:' }}</td>
    			<td>{{ $cuentas_contables->fecha_de_corte }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Código del evento:' }}</td>
    			<td>{{ $cuentas_contables->codigo_de_evento }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Cuenta Contable:' }}</td>
    			<td>{{ $cuentas_contables->cuenta_contable }}</td>
    		</tr>
    		<tr>
    			<td>{{ 'Tipo de Envio:' }}</td>
    			<td>{{ $cuentas_contables->tipo_envio }}</td>
    		</tr>
    	</tbody>
    </table>
</body>
</html>